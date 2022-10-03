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
        $service_name = $this->faker->text(25);
        $slug = Str::slug($service_name, "-");
        $user = DB::table('users')->whereNotIn('role', ['ADM', 'USR'])->get()->random()->id;
        return [
            'provider_id' => $user,
            'category_id' => $this->faker->numberBetween(1, 6),
            'sub_category_id' => $this->faker->numberBetween(1, 10),
            'name' => $service_name,
            'slug' => $slug,
            'description' => $this->faker->text(500),
            // 'services_offered' => $this->faker->randomElement(['Cleaning|Fixing|Maintenance', 'Fitting|Grinding|Maintenance']),
            'price' => $this->faker->numberBetween(100, 500),
            'images' => 'service-' .$this->faker->numberBetween(1,22) .'.jpg',
           ];
    }
}
