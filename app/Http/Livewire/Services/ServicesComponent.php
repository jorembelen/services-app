<?php

namespace App\Http\Livewire\Services;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Service;
use App\Models\UserFavorite;
use Illuminate\Support\Facades\DB;

class ServicesComponent extends AdminComponent
{

    public function render()
    {
        $services = Service::query()->latest()->paginate(12);
        $totalServices = DB::table('services')->pluck('id')->count();

        return view('livewire.services.services-component', compact('services', 'totalServices'));
    }

    public function favorite(Service $service)
    {
        if(!auth()->user()) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'error',
                'title' => 'Please login first to continue.',
                'text' => '',
            ]);
            return redirect()->route('login');
        }

        auth()->user()->addUserFavorites($service->id);
        $msg = $service->userFavorite() ? 'added' : 'removed';

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Service was ' .$msg .' to favorites!',
            'title' => 'Success',
        ]);
    }

}
