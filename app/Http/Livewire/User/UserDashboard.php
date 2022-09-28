<?php

namespace App\Http\Livewire\User;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\UserBooking;
use App\Models\UserFavorite;

class UserDashboard extends AdminComponent
{
    public $showDashboard = true;
    public $showFavorites = false;
    public $showBookings = false;
    protected $listeners = ['cancel'];

    public function render()
    {
        $favorites = UserFavorite::with('user', 'service')->whereuser_id(auth()->id())->latest()->paginate(12);
        $bookings = UserBooking::with('user', 'service')->whereuser_id(auth()->id())->latest()->paginate(12);

        return view('livewire.user.user-dashboard', compact('favorites', 'bookings'));
    }

    public function filteredDashboard($value)
    {
        if($value == 'favorites') {
            $this->showFavorites = true;
            $this->showDashboard = false;
            $this->showBookings = false;
        } elseif ($value == 'dashboard'){
            $this->showDashboard = true;
            $this->showFavorites = false;
            $this->showBookings = false;
        } elseif ($value == 'bookings'){
            $this->showBookings = true;
            $this->showFavorites = false;
            $this->showDashboard = false;
        }

    }

        /**
     * show confirmation on cancel
     *
     * @param  mixed $id
     * @return void
     */
    public function alertConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirmCancel', [
            'type' => 'warning',
            'message' => 'Are you sure?',
            'text' => 'Are you sure? Please confirm to proceed.',
            'id' => $id
        ]);
    }

    public function cancel(UserBooking $booking)
    {
        $booking->update(['status' => 'cancelled']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Service was successfully cancelled.',
            'title' => 'Success',
        ]);
        return;
    }

}
