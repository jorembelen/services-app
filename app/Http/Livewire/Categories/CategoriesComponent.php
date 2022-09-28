<?php

namespace App\Http\Livewire\Categories;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Category;

class CategoriesComponent extends AdminComponent
{

    public function render()
    {
        $categories = Category::query()->latest()->paginate(12);

        return view('livewire.categories.categories-component', compact('categories'));
    }

    public function service($catSlug)
    {
        return $this->redirect(route('home.category-service', $catSlug));
    }


}
