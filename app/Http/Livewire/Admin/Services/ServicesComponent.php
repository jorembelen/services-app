<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;

class ServicesComponent extends Component
{
    // public bool $status;
    // public string $field;
    // public Service $model;

    public function render()
    {
        $services = Service::query()->latest()->get();

        return view('livewire.admin.services.services-component', compact('services'))->extends('layouts.admin');
    }

    // public function mount()
    // {
    //     $this->status = (bool) $this->model->getAttribute($this->field);
    // }

    // public function updating($field, $value)
    // {
    //     $this->model->setAttribute($this->field, $value)->save();
    // }


}
