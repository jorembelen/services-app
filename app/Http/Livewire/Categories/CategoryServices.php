<?php

namespace App\Http\Livewire\Categories;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Category;
use App\Models\Service;

class CategoryServices extends AdminComponent
{
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

        return view('livewire.categories.category-services', compact('services'));
    }

    public function favorite(Service $service)
    {
        auth()->user()->addUserFavorites($service->id);
        $msg = $service->userFavorite() ? 'added' : 'removed';

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Service was ' .$msg .' to favorites!',
            'title' => 'Success',
        ]);
    }

}
