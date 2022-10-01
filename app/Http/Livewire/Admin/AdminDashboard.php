<?php

namespace App\Http\Livewire\Admin;

use App\Models\Service;
use App\Models\User;
use Livewire\Component;

class AdminDashboard extends Component
{
    public function render()
    {
        $totalUsers = User::whererole('USR')->count();
        $totalProviders = User::whererole('SVP')->count();
        $totalServices = Service::pluck('id')->count();

        return view('livewire.admin.admin-dashboard', compact('totalProviders', 'totalServices', 'totalUsers'))->extends('layouts.admin');
    }
}
