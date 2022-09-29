<?php

namespace App\Http\Livewire\User;

use App\Http\Livewire\Admin\AdminComponent;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Models\Service;
use App\Models\UserBooking;
use App\Models\UserFavorite;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;

class UserDashboard extends AdminComponent
{
    use WithFileUploads;

    public $currentTab, $filter, $image;
    public $state = [];
    protected $listeners = ['cancel'];

    public function mount($dashboard)
    {
        $this->currentTab = $dashboard;
        if($dashboard === 'profile') {
            $this->state = auth()->user()->toArray();
        }
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
        if($value === 'profile') {
            $this->state = auth()->user()->toArray();
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

    public function bookAgain(Service $service)
    {
        return redirect()->route('book.service', $service->slug);
    }

    public function updatedImage()
    {
        $previousPath = auth()->user()->profile_photo_path;

        $file = $this->image;
        $ImageUpload = Image::make($file);
        $originalPath = 'uploads/avatars/';
        $name = $file->hashName();
        $ImageUpload->fit(180)->stream();
        Storage::disk('s3')->put($originalPath .$name, $ImageUpload->__toString());
        auth()->user()->update(['profile_photo_path' => $name]);
        Storage::disk('s3')->delete(parse_url($originalPath .$previousPath));

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Avatar successfully updated.',
            'title' => 'Success',
        ]);
        return;
    }

    public function updateProfile()
    {
        $data = Validator::make($this->state, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users,email,' .auth()->id(),
            'mobile' => 'nullable',
        ])->validate();

        auth()->user()->update($data);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Profile successfully updated.',
            'title' => 'Success',
        ]);
        return;
    }

}
