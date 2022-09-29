<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Livewire\Component;

class ServiceDetails extends Component
{
    public $descriptionShow = true;
    public $servicesOfferedShow = false;
    public $reviewsShow = false;

    public function mount($service_slug)
    {
        $this->service_slug = $service_slug;
    }

    public function render()
    {
        $service = Service::with('provider')->where('slug', $this->service_slug)->first();
        // dd($service->providerServices);
        if($service){
            $r_services = Service::where('category_id', $service->category_id)->where('slug', '!=', $this->service_slug)->inRandomOrder()->take(8)->get();
        }else{
            $r_services = null;
            $this->redirect(route('home'));
           session()->flash('message', 'Sorry, No data found!');
        }

        return view('livewire.services.service-details', compact('service', 'r_services'));
    }

    public function showServOffer()
    {
        $this->servicesOfferedShow = true;
        $this->descriptionShow = false;
        $this->reviewsShow = false;
    }

    public function showDescription()
    {
        $this->descriptionShow = true;
        $this->servicesOfferedShow = false;
        $this->reviewsShow = false;
    }

    public function showReviews()
    {
        $this->reviewsShow = true;
        $this->servicesOfferedShow = false;
        $this->descriptionShow = false;
    }

    public function favorite(Service $service)
    {
        if(!auth()->user()) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'error',
                'title' => 'Please login first to continue.',
                'text' => '',
            ]);
            return redirect()->route('login');
        }

        auth()->user()->addUserFavorites($service->id);
        $msg = $service->userFavorite() ? 'added to' : 'removed from';

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Successfully ' .$msg .' favorites!',
            'title' => 'Success',
        ]);
    }

}
