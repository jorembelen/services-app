<?php

namespace App\Models;

use App\Traits\ServicesTraits;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, ServicesTraits;

    protected $fillable = [
        'provider_id',
        'category_id',
        'sub_category_id',
        'name',
        'slug',
        'price',
        'description',
        'images',
        'status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }

    public function providerServices()
    {
        return $this->hasMany(ProviderService::class);
    }

    public function provider()
    {
        return $this->belongsTo(User::class, 'provider_id');
    }



}
