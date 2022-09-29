<?php

namespace App\Http\Livewire\User;

use App\Models\Service;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class BookService extends Component
{
    public $service_slug, $serviceId;
    public $state = [];

    public function mount($service_slug)
    {
        $this->service_slug = $service_slug;
    }

    public function render()
    {
        $service = Service::whereslug($this->service_slug)->first();
        $this->state['price'] = $service->price;
        $this->state['name'] = $service->name;
        $this->serviceId = $service->id;

        return view('livewire.user.book-service', compact('service'));
    }

    public function book(Service $service)
    {
        $data = Validator::make($this->state, [
            'location' => 'required',
            'price' => 'required',
            'time' => 'required',
            'date' => 'required',
            'notes' => 'nullable|min:5',
        ])->validate();

        $data['service_id'] = $service->id;
        $data['provider_id'] = $service->provider_id;
        auth()->user()->bookings()->create($data);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Booking was successfully added!',
            'title' => 'Success',
        ]);

        return redirect()->route('user.dashboard', 'bookings');
    }

}
