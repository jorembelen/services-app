<?php

namespace App\Http\Livewire\User;

use App\Models\ServiceRequest;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Illuminate\Support\Str;

class RequestServiceComponent extends Component
{
    public $state = [];
    public $showCreate = false;

    public function render()
    {
        $categories = SubCategory::query()->orderBy('category_id', 'asc')->get();
        $services = ServiceRequest::query()
            ->whereuser_id(auth()->id())
            ->latest()->get();

        return view('livewire.user.request-service-component', compact('categories', 'services'));
    }

    public function close()
    {
        $this->state = null;
        $this->resetValidation();
        $this->showCreate = false;
    }

    public function create()
    {
        $this->showCreate = true;
    }

    public function addService()
    {
        $data = Validator::make($this->state, [
            'name' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description' => 'required',
        ])->validate();

        $sc = SubCategory::find($data['category_id']);
        $data['category_id'] = $sc->category_id;
        $data['sub_category_id'] = $sc->id;
        $data['user_id'] = auth()->id();

        ServiceRequest::create($data);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Service request was successfully added!',
            'title' => 'Success',
        ]);
        $this->close();
        return;
    }

}
