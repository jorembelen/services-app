<?php

namespace App\Http\Livewire\Provider;

use App\Models\Category;
use App\Models\ProviderService;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;


class ServiceCreate extends Component
{
    use WithFileUploads;
    public $services_offered = [];
    public $inputs = [];
    public $images, $price, $category_id, $slug, $description, $name;

    public $i = 1;

    public function add($i)

    {
        $b = $i + 1;

        $this->i = $b;

        array_push($this->inputs ,$b);
    }

    public function mount()
    {
        $i = 1;

        $this->i = $i;

        array_push($this->inputs ,$i);

    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function render()
    {
        $categories = Category::query()->get(['id', 'name']);

        return view('livewire.provider.service-create', compact('categories'));
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }


    public function addService()
    {
        $data = $this->validate([
            'name' => 'required',
            'price' => 'required',
            'slug' => 'required|unique:services,slug',
            'category_id' => 'required',
            'services_offered' => 'required',
            'description' => 'required',
            'images.*' => 'nullable|image',
        ],[
            'category_id.required' => 'Please choose category.',
            'services_offered.required' => 'Please add services.',
        ]);

        DB::beginTransaction();
        if($data) {
            $data['provider_id'] = auth()->id();
            $images=array();
            if($files = $this->images){
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
                }
            }
            $service = Service::create($data);
            DB::commit();

            $s = $this->services_offered;
            foreach($s as $item){
                ProviderService::create([
                    'service_id' => $service->id,
                    'name' => $item,
                ]);
            }

            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',
                'title' => 'New service was added successfully!',
                'text' => '',
            ]);
            return redirect()->route('svp.dashboard', 'dashboard');
        }else{
            DB::rollBack();
            return redirect()->back();
        }

    }

}
