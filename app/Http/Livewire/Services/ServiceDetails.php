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

        return view('livewire.services.service-details', compact('service', 'r_services'))->extends('layouts.master');
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


}
