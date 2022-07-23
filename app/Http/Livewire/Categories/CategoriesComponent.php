<?php

namespace App\Http\Livewire\Categories;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class CategoriesComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $categories = Category::query()->latest()->paginate(12);

        return view('livewire.categories.categories-component', compact('categories'))->extends('layouts.master');
    }

    public function service($catSlug)
    {
        return $this->redirect(route('home.category-service', $catSlug));
    }


}
