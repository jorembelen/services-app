<?php

namespace App\Models;

use App\Traits\CategoryTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, CategoryTraits;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }


    public function servicesCount()
    {
        # code...
    }


}
