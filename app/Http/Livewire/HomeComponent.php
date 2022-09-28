<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;

class HomeComponent extends Component
{
    public $q;


    public function mount()
    {
        if(strlen($this->q) > 2){
            $this->q = Service::where('name', 'like', '%' . $this->q . '%')
            ->get();
        }
    }

    public function render()
    {
        $featured = Category::whereHas('services')->take(6)->get();
        $featuredServices = Service::query()->take(10)->get();

        if(strlen($this->q) > 2){
            $this->q = Service::where('name', 'like', '%' . $this->q . '%')
            ->get();
        }

        return view('livewire.home-component', compact('featured', 'featuredServices'));
    }




}
