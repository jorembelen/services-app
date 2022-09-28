<?php

namespace App\Http\Livewire\User;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\UserFavorite;

class UserDashboard extends AdminComponent
{
    public $showDashboard = true;
    public $showFavorites = false;

    public function render()
    {
        $favorites = UserFavorite::with('user', 'service')->whereuser_id(auth()->id())->latest()->paginate(12);

        return view('livewire.user.user-dashboard', compact('favorites'));
    }

    public function filteredDashboard($value)
    {
        if($value == 'favorites') {
            $this->showFavorites = !$this->showFavorites;
            $this->showDashboard = false;
        } elseif ($value == 'dashboard'){
            $this->showDashboard = !$this->showDashboard;
            $this->showFavorites = false;

        }

    }

}
