<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryServices extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $categorySlug, $catName, $catId, $catCount;

    public function mount($categorySlug)
    {
        $this->categorySlug = $categorySlug;
        $category = Category::whereslug($categorySlug)->first();
        $this->catCount = $category->categoryServiceCount();
        $this->catName = $category->name;
        $this->catId = $category->id;
    }

    public function render()
    {
        $services = Service::wherecategory_id($this->catId)->latest()->paginate(12);

        return view('livewire.categories.category-services', compact('services'))->extends('layouts.master');
    }
}
