<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;

trait CategoryTraits {

    public function categoryServiceCount()
    {
            $services = DB::table('services')->wherecategory_id($this->id)->pluck('id')->count();
            if($services){
                return $services;
            }else{
                return 0;

            }
    }



}
