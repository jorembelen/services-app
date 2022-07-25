<?php

namespace App\Traits;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

trait ServicesTraits {

    public function defaultImage()
    {
        $service = Service::select('images')->find($this->id);
        if($service->images == null){
            return Storage::disk('s3')->url('uploads/services/images/service-1.jpg');
        }else{
            $images = explode('|', $service->images);
            if(count($images) > 1){
                return Storage::disk('s3')->url('uploads/services/images/' .$images[0]);
            }else{
                return Storage::disk('s3')->url('uploads/services/images/' .$service->images);
            }
        }
    }

    public function addService($data)
    {
        $services = new Service();

        $data['user_id'] = auth()->id();
        $data['services_offered'] = implode(',', $data['services_offered']);
        $images=array();
        if($files = $data['images']){
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

        $services->create($data);

    }



}
