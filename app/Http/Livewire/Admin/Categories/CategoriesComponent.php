<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Category;

class CategoriesComponent extends AdminComponent
{
    public function render()
    {
        $categories = Category::latest()->paginate(10);

        return view('livewire.admin.categories.categories-component', compact('categories'))->extends('layouts.admin');
    }
}
