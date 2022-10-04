<?php

namespace App\Http\Livewire\Services;

use App\Models\ServiceRequest;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ServiceRequestsComponent extends Component
{
    public function render()
    {
        $services = ServiceRequest::query()->latest()->paginate(12);
        $totalServices = DB::table('service_requests')->pluck('id')->count();

        return view('livewire.services.service-requests-component', compact('services', 'totalServices'));
    }
}
