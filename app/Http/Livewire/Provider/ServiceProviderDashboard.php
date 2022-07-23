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

}
