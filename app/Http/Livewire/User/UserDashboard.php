<?php

namespace App\Http\Livewire\User;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Service;
use App\Models\UserBooking;
use App\Models\UserFavorite;

class UserDashboard extends AdminComponent
{
    public $currentTab, $filter;
    protected $listeners = ['cancel'];

    public function mount($dashboard)
    {
        $this->currentTab = $dashboard;
    }

    public function render()
    {
        $status = $this->filter;
        $filtered = new UserBooking();
        $filtered = $filtered->with('user', 'service')->whereuser_id(auth()->id());

        if($status) {
            $filtered = $filtered->wherestatus($status);
        }

        $bookings = $filtered->latest()->paginate(12);

        $favorites = UserFavorite::with('user', 'service')->whereuser_id(auth()->id())->latest()->paginate(12);

        return view('livewire.user.user-dashboard', compact('favorites', 'bookings'));
    }

    public function filteredDashboard($value)
    {
        $this->currentTab = $value;
        $this->filter = null;
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

    public function bookAgain(Service $service)
    {
        return redirect()->route('book.service', $service->slug);
    }


}
