<?php

namespace App\Http\Livewire\Admin\Categories;

use App\Http\Livewire\Admin\AdminComponent;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoriesComponent extends AdminComponent
{
    use WithFileUploads;
    public $showFiltered = 'categories';
    public $edit = false;
    public $hasImage = 0;
    public $name, $slug, $description, $image;
    public $catId, $oldImage;
    protected $listeners = ['cancel'];

    public function render()
    {
        $categories = Category::latest()->paginate(10);

        return view('livewire.admin.categories.categories-component', compact('categories'))->extends('layouts.admin');
    }

    public function filtered($value = null)
    {
        $this->showFiltered = $value;
        $this->resetInput();
    }

    public function edit(Category $category)
    {
        $this->showFiltered = 'add';
        $this->catId = $category->id;
        $this->oldImage = $category->image;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->description = $category->description;
        $this->edit = true;
    }

    public function validateInput()
    {
        $data = $this->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories,slug,' .$this->catId,
            'description' => 'required',
            'image' => 'nullable',
            ]);

        return $data;
    }

    public function resetInput()
    {
        $this->name = null;
        $this->slug = null;
        $this->description = null;
        $this->image = null;
        $this->edit = false;
    }

    public function editCategory(Category $category)
    {
        $validatedData = $this->validateInput();

        $img = $validatedData['image'] ?? null;
        $this->hasImage = $img ? 1 : 0;
        if($this->hasImage == 1) {
            if($validatedData['image'] != $category->image) {
                $file = $validatedData['image'];
                $ImageUpload = Image::make($file);
                $originalPath = 'uploads/categories/';
                $name = $file->hashName();
                $ImageUpload->resize(640,428)->stream();
                Storage::disk('s3')->put($originalPath .$name, $ImageUpload->__toString());
                Storage::disk('s3')->delete(parse_url($originalPath .$category->image));
                $validatedData['image'] = $name;
            }
        }

        $category->update($validatedData);
        $this->resetInput();

        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Category was successfully updated!',
            'title' => 'Success',
        ]);
        $this->showFiltered = 'categories';
        return;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function addCategory()
    {
        $validatedData = $this->validateInput();

        $img = $validatedData['image'] ?? null;
        $this->hasImage = $img ? 1 : 0;
        // dd($this->hasImage);
        if($this->hasImage == 1) {
            $file = $validatedData['image'];
            $ImageUpload = Image::make($file);
            $originalPath = 'uploads/categories/';
            $name = $file->hashName();
            $ImageUpload->resize(640,428)->stream();
            Storage::disk('s3')->put($originalPath .$name, $ImageUpload->__toString());
            $validatedData['image'] = $name;
        }

        Category::create($validatedData);
        $this->resetInput();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Category was successfully added!',
            'title' => 'Success',
        ]);
        $this->showFiltered = 'categories';
        return;

    }

    public function alertConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirmCancel', [
            'type' => 'warning',
            'message' => 'Are you sure?',
            'text' => 'Are you sure? Please confirm to proceed.',
            'id' => $id
        ]);
    }

    public function cancel(Category $category)
    {
        if($category->services()->count() > 0) {
            $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'error',
                'title' => 'Sorry, You cannot delete this category!',
                'text' => '',
            ]);
            return;
        }
        if($category->image) {
            $originalPath = 'uploads/categories/';
            Storage::disk('s3')->delete(parse_url($originalPath .$category->image));
        }
        $category->delete();
        $this->dispatchBrowserEvent('alert', [
            'type' => 'success',
            'message' => 'Category was successfully deleted.',
            'title' => 'Success',
        ]);
        return;
    }

}
