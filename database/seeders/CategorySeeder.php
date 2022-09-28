<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Category::factory(24)->create();

        Category::create([
            'name' => 'Electrical',
            'slug' => 'electrical',
            'description' => 'lorem ipsMollit anim non elit veniam in irure enim veniam sit nostrud enim quis.',
            'image' => 'category-1.jpg',
        ]);

        Category::create([
            'name' => 'Automotive',
            'slug' => 'automotive',
            'description' => 'Officia consequat ullamco consectetur cupidatat cillum quis adipisicing eu do.',
            'image' => 'category-2.jpg',
        ]);

        Category::create([
            'name' => 'Cleaning',
            'slug' => 'cleaning',
            'description' => 'Nostrud ullamco exercitation voluptate aute nisi nostrud non sunt commodo consequat eu exercitation enim consequat.',
            'image' => 'category-3.jpg',
        ]);

        Category::create([
            'name' => 'Computer',
            'slug' => 'computer',
            'description' => 'Sunt duis adipisicing nisi voluptate pariatur veniam ex ullamco fugiat.',
            'image' => 'category-4.jpg',
        ]);

        Category::create([
            'name' => 'Painting',
            'slug' => 'painting',
            'description' => 'Ipsum aute tempor laboris reprehenderit.',
            'image' => 'category-5.jpg',
        ]);

        Category::create([
            'name' => 'Construction',
            'slug' => 'construction',
            'description' => 'Labore anim consectetur tempor qui sit anim ea nostrud aliquip nulla.',
            'image' => 'category-6.jpg',
        ]);


    }
}
