<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ServicesComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $services = Service::query()->latest()->paginate(12);
        $totalServices = DB::table('services')->pluck('id')->count();

        return view('livewire.services.services-component', compact('services', 'totalServices'))->extends('layouts.master');
    }
}
