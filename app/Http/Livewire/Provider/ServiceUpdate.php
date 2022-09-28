<?php

namespace App\Http\Livewire\Provider;

use App\Models\Category;
use App\Models\ProviderService;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ServiceUpdate extends Component
{
    use WithFileUploads;
    public $services_offered = [];

    public $editMode = false;

    public $inputs = [];
    public $images, $price, $category_id, $slug, $description, $name, $services, $serviceId, $serviceImages, $service;

    public $i = 1;

    public function add($i)

    {
        $b = $i + 1;

        $this->i = $b;

        array_push($this->services_offered ,$b);
    }

    public function remove($i)
    {
        unset($this->services_offered[$i]);
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function mount($serviceSlug)
    {
        $this->inputs = [0];
        $this->services_offered = [];

        $service = Service::whereslug($serviceSlug)->first();
        $this->service = $service;
        $this->serviceId = $service->id;
        $this->name = $service->name;
        $this->slug = $service->slug;
        $this->price = $service->price;
        $this->description = $service->description;
        $this->category_id = $service->category_id;
        $this->serviceImages = $service->images;
        $ps = DB::table('provider_services')->select('id','name')->whereservice_id($service->id)->get();


        foreach ($ps as $key => $value) {

            // incrementing input by value
            $this->inputs[$key] = $value;

            // showing value their own field
            $this->services_offered[$key] = $value;
        }
    }

    public function render()
    {
        $categories = Category::query()->get(['id', 'name']);
        return view('livewire.provider.service-update', compact('categories'));
    }

    public function updateService(Service $service)
    {
        $data = $this->validate([
            'name' => 'required',
            'price' => 'required',
            'slug' => 'required|unique:services,slug,' .$service->id,
            'category_id' => 'required',
            'services_offered' => 'required',
            'description' => 'required',
        ],[
            'category_id.required' => 'Please choose category.',
            'services_offered.required' => 'Please add services.',
        ]);

        DB::beginTransaction();
        if($data) {
            $data['user_id'] = auth()->id();
            $images=array();
            if($files = $this->images){
                $data = $this->validate([
                    'images.*' => 'required|image'
                ]);
                $photos = explode('|', $service->images);
                foreach($files as $file){

                    // for saving original image
                    $ImageUpload = Image::make($file);
                    $originalPath = 'uploads/services/images/';
                    $name = $file->hashName();
                    $ImageUpload->resize(640,426)->stream();
                    Storage::disk('s3')->put($originalPath .$name, $ImageUpload->__toString());


                    // for saving to database
                    $images[]=$name;
                    $data['images'] = implode("|",$images);

                    // Remove old images
                    if(count($photos) > 0){
                        //  dd($photos);
                        foreach($photos as $photo){
                            // Delete old image from file
                            Storage::disk('s3')->delete(parse_url($originalPath .$photo));
                        }
                    }
                }
            }
            $service->update($data);
            $service->providerServices()->delete();
            $s = $this->services_offered;
            foreach($s as $item){
                ProviderService::create([
                    'service_id' => $service->id,
                    'name' => $item['name'],
                ]);
            }
            DB::commit();



            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => $service->name .' was updated successfully!',
                'title' => 'Success',
            ]);
            return redirect()->route('svp.dashboard');
        }else{
            DB::rollBack();
            return redirect()->back();
        }
    }


}
