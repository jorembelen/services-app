<?php

namespace Database\Seeders;

use App\Models\ProviderService;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = Service::factory(22)->create();

        $services->each(function ($service) {
            $service->providerServices()->saveMany(
                ProviderService::factory(3)->make()
            );
        });

    }
}
