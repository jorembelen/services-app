<?php

namespace App\Http\Livewire\User;

use App\Models\SubCategory;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Illuminate\Support\Str;

class RequestServiceComponent extends Component
{
    public $state = [];

    public function render()
    {
        $categories = SubCategory::query()->orderBy('category_id', 'asc')->get();

        return view('livewire.user.request-service-component', compact('categories'));
    }

    public function addService()
    {
        $data = Validator::make($this->state, [
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required',
        ])->validate();

        dd($data);
    }

}
