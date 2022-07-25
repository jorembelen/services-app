<?php

namespace App\Traits;

use App\Models\UserLocation;

trait UserTraits {

        public function providerLocation()
        {
            $loc = UserLocation::whereuser_id($this->id)->first();
            if($loc){
                return $loc->province .', ' .$loc->city;
            }
            return null;
        }



}
