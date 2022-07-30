<?php

namespace App\Http\Livewire\Provider;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceProviderDashboard extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $showInactiveServices = false;
    public $showActiveServices = false;
    public $showDashboard = true;

    public function render()
    {
        $services = Service::whereuser_id(auth()->id())
            ->wherestatus(1)
            ->latest()->paginate(12);

        $inactive_services = Service::whereuser_id(auth()->id())
            ->wherestatus(0)
            ->latest()->paginate(12);

        return view('livewire.provider.service-provider-dashboard', compact('services', 'inactive_services'))->extends('layouts.master');
    }

    public function dashboard()
    {
        $this->showDashboard = true;
        $this->showActiveServices = false;
        $this->showInactiveServices = false;
    }

    public function myActiveServices()
    {
        $this->showActiveServices = true;
        $this->showInactiveServices = false;
        $this->showDashboard = false;
    }

    public function myInactiveServices()
    {
        $this->showInactiveServices = true;
        $this->showActiveServices = false;
        $this->showDashboard = false;
    }

    public function inactive(Service $service)
    {
        $service->update(['status' => 0]);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => $service->name .' was deactivated successfully!',
            'text' => '',
        ]);
        $this->myInactiveServices();
    }

    public function active(Service $service)
    {
        $service->update(['status' => 1]);
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => $service->name .' was activated successfully!',
            'text' => '',
        ]);
        $this->myActiveServices();
    }

    public function deleteService(Service $service)
    {
        $service->providerServices()->delete();
        $service->delete();
        $this->dispatchBrowserEvent('swal:modal', [
            'type' => 'success',
            'title' => $service->name .' was deleted successfully!',
            'text' => '',
        ]);
        $this->myActiveServices();
    }


}
