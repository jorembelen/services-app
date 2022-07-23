<?php

namespace App\Http\Livewire\Services;

use App\Models\Category;
use Livewire\Component;

class ServiceCreate extends Component
{
    public function render()
    {
        $categories = Category::query()->get(['id', 'name']);

        return view('livewire.services.service-create', compact('categories'))->extends('layouts.master');
    }
}
