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
            'image' => 'category-1.jpg',
        ]);

        Category::create([
            'name' => 'Automotive',
            'slug' => 'automotive',
            'image' => 'category-2.jpg',
        ]);

        Category::create([
            'name' => 'Cleaning',
            'slug' => 'cleaning',
            'image' => 'category-3.jpg',
        ]);

        Category::create([
            'name' => 'Computer',
            'slug' => 'computer',
            'image' => 'category-4.jpg',
        ]);

        Category::create([
            'name' => 'Painting',
            'slug' => 'painting',
            'image' => 'category-5.jpg',
        ]);

        Category::create([
            'name' => 'Construction',
            'slug' => 'construction',
            'image' => 'category-6.jpg',
        ]);


    }
}
