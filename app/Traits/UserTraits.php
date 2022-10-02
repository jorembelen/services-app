<?php

namespace App\Traits;

use App\Models\User;
use App\Models\UserFavorite;
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

        public function addUserFavorites($serviceId)
        {
            $favorite = UserFavorite::whereuser_id(auth()->id())->whereservice_id($serviceId)->first();
                if($favorite) {
                    $favorite->delete();
                } else {
                    auth()->user()->favorite()->create([
                        'service_id' => $serviceId,
                    ]);
                }
        }



}
