<?php

namespace App\Http\Livewire\User;

use App\Models\Service;
use Livewire\Component;

class BookService extends Component
{
    public $service_slug, $price;

    public function mount($service_slug)
    {
        $this->service_slug = $service_slug;
    }

    public function render()
    {
        $service = Service::whereslug($this->service_slug)->first();
        $this->price = $service->price;

        return view('livewire.user.book-service', compact('service'))->extends('layouts.master');
    }
}
