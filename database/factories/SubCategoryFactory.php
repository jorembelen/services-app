<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $cat = DB::table('categories')->get()->random()->id;
        $name = $this->faker->text(25);
        $slug = Str::slug($name, "-");

        return [
            'category_id' => $cat,
            'name' => $name,
            'slug' => $slug,
        ];
    }
}
