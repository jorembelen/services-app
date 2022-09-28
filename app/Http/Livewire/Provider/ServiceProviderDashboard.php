<?php

namespace App\Http\Livewire\Provider;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ServiceProviderDashboard extends AdminComponent
{

    public $showInactiveServices = false;
    public $showActiveServices = false;
    public $showDashboard = true;

    public function render()
    {
        $services = Service::with('provider', 'category')->whereuser_id(auth()->id())
            ->wherestatus(1)
            ->latest()->paginate(12);

        $inactive_services = Service::with('provider', 'category')->whereuser_id(auth()->id())
            ->wherestatus(0)
            ->latest()->paginate(12);

        return view('livewire.provider.service-provider-dashboard', compact('services', 'inactive_services'));
    }

    public function dashboard()
    {
        $this->showDashboard = true;
        $this->showActiveServices = false;
        $this->showInactiveServices = false;
    }

    public function filteredServices($value)
    {
        if($value == 'active') {
            $this->showActiveServices = true;
            $this->showInactiveServices = false;
        } else {
            $this->showInactiveServices = true;
            $this->showActiveServices = false;
        }
        $this->showDashboard = false;
        $this->resetPage();
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


    }
