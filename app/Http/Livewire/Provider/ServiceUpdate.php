<?php

namespace App\Http\Livewire\Provider;

use App\Models\Category;
use App\Models\ProviderService;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class ServiceUpdate extends Component
{
    use WithFileUploads;
    public $services_offered = [];

    public $editMode = false;

    public $inputs = [];
    public $images, $price, $category_id, $slug, $description, $name, $services;

    public $i = 1;

    public function add($i)

    {
        $b = $i + 1;

        $this->i = $b;

        array_push($this->services_offered ,$b);
    }

    public function remove($i)
    {
        unset($this->services_offered[$i]);
    }

    public function mount($serviceSlug)
    {
        $this->inputs = [0];
        $this->services_offered = [];

        $service = Service::whereslug($serviceSlug)->first();
        $this->name = $service->name;
        $this->slug = $service->slug;
        $this->price = $service->price;
        $this->description = $service->description;
        $this->category_id = $service->category_id;
        $ps = DB::table('provider_services')->select('id','name')->whereservice_id($service->id)->get();


        foreach ($ps as $key => $value) {

            // incrementing input by value
            $this->inputs[$key] = $value;

            // showing value their own field
            $this->services_offered[$key] = $value;
        }
    }

    public function render()
    {
        $categories = Category::query()->get(['id', 'name']);
        return view('livewire.provider.service-update', compact('categories'))->extends('layouts.master');
    }

    public function updateService()
    {
       dd($this->services_offered);
    }


}
