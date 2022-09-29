<?php

namespace App\Http\Livewire\Provider;

use App\Http\Livewire\Admin\AdminComponent;
use Intervention\Image\Facades\Image;
use App\Models\Service;
use App\Models\UserBooking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Validator;

class ServiceProviderDashboard extends AdminComponent
{
    use WithFileUploads;
    protected $listeners = ['cancel'];
    public $currentTab, $filter, $image;
    public $state = [];

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
        $filtered = $filtered->with('user', 'service')->whereprovider_id(auth()->id());

        if($status) {
            $filtered = $filtered->wherestatus($status);
        }

        $bookings = $filtered->latest()->paginate(12);

        $services = Service::with('provider', 'category')->whereprovider_id(auth()->id())
            ->wherestatus(1)
            ->latest()->paginate(12);

        $inactive_services = Service::with('provider', 'category')->whereprovider_id(auth()->id())
            ->wherestatus(0)
            ->latest()->paginate(12);

        return view('livewire.provider.service-provider-dashboard', compact('services', 'inactive_services', 'bookings'));
    }

    public function filteredDashboard($value)
    {
        $this->currentTab = $value;
        $this->filter = null;
        if($value === 'profile') {
            $this->state = auth()->user()->toArray();
        }
    }

    public function inactive(Service $service)
    {
        $service->update(['status' => 0]);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Service was successfully deactivated!',
            'title' => 'Success',
        ]);
    }

    public function active(Service $service)
    {
        $service->update(['status' => 1]);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Service was successfully activated!',
            'title' => 'Success',
        ]);
    }

    public function completed(UserBooking $booking)
    {
        $booking->update(['status' => 'completed']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Service was successfully completed!',
            'title' => 'Success',
        ]);
        return;
    }

    public function accept(UserBooking $booking)
    {
        $booking->update(['status' => 'in progress']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Service was successfully accepted!',
            'title' => 'Success',
        ]);
        return;
    }

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
        $booking->update(['status' => 'rejected']);
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Service was successfully rejected.',
            'title' => 'Success',
        ]);
        return;
    }

    public function deleteService(Service $service)
    {
        DB::beginTransaction();
        if($service) {
            $photos = explode('|', $service->images);
            $originalPath = 'uploads/services/images/';
            // Remove old images
            if(count($photos) > 0){
                //  dd($photos);
                foreach($photos as $photo){
                    // Delete old image from file
                    Storage::disk('s3')->delete(parse_url($originalPath .$photo));
                }
                $service->providerServices()->delete();
                $service->delete();
                DB::commit();
                $this->dispatchBrowserEvent('swal:modal', [
                    'type' => 'success',
                    'message' => 'Service was successfully deleted!',
                    'title' => 'Success',
                ]);
                $this->myActiveServices();
            }
            }else{
                DB::rollBack();
                return redirect()->back();
            }

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
