<?php

namespace App\Models;

use App\Traits\CategoryTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function getDefaultImageAttribute()
    {
        if($this->image) {
            return Storage::disk('s3')->url('uploads/categories/' .$this->image);
        }
        return asset('assets/img/category/category-6.jpg');
    }


}
