<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $service_name = $this->faker->text(10);
        $slug = Str::slug($service_name, "-");
        $user = DB::table('users')->whereNotIn('role', ['ADM', 'USR'])->get()->random()->id;
        return [
            'user_id' => $user,
            'name' => $service_name,
            'slug' => $slug,
            'tagline' => $this->faker->text(20),
            'category_id' => $this->faker->numberBetween(1, 20),
            'price' => $this->faker->numberBetween(100, 500),
            'image' => 'service-' .$this->faker->numberBetween(1,6) .'.jpg',
            'thumbnail' => 'service-' .$this->faker->numberBetween(1,22) .'.jpg',
            'description' => $this->faker->text(500),
            'inclusion' => $this->faker->text(20) . '|' . $this->faker->text(20) . '|'  . $this->faker->text(20) . '|'  . $this->faker->text(20) . '|'  . $this->faker->text(20),
            'exclusion' => $this->faker->text(20) . '|' . $this->faker->text(20) . '|'  . $this->faker->text(20) . '|'  . $this->faker->text(20) . '|'  . $this->faker->text(20),
        ];
    }
}
