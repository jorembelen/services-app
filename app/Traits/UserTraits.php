<?php

namespace App\Traits;

use App\Models\User;
use App\Models\UserLocation;
use Illuminate\Support\Facades\Storage;

trait UserTraits {

        public function providerLocation()
        {
            $loc = UserLocation::whereuser_id($this->id)->first();
            if($loc){
                return $loc->province .', ' .$loc->city;
            }
            return null;
        }

        public function userAvatar()
        {
            $user = User::find($this->id);
            if($user->profile_photo_path == null){
                return asset('assets/img/provider/no-image.png');
            }else{
                return Storage::disk('s3')->url('uploads/avatar/' .$user->profile_photo_path);
            }
        }



}
