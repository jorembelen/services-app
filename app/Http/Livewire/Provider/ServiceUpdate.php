<?php

namespace App\Http\Livewire\Provider;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceUpdate extends Component
{
    use WithFileUploads;
    public $services_offered = [];
    public $inputs = [];
    public $images, $price, $category_id, $slug, $description, $name;

    public $i = 1;

    public function add($i)

    {
        $b = $i + 1;

        $this->i = $b;

        array_push($this->inputs ,$b);
    }


    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function mount($serviceSlug)
    {
        $i = 1;

        $this->i = $i;

        array_push($this->inputs ,$i);

        $service = Service::whereslug($serviceSlug)->first();
        $this->name = $service->name;
        $this->slug = $service->slug;
        $this->price = $service->price;
        $this->description = $service->description;
        $this->category_id = $service->category_id;
    }

    public function render()
    {
        $categories = Category::query()->get(['id', 'name']);
        return view('livewire.provider.service-update', compact('categories'))->extends('layouts.master');
    }
}
