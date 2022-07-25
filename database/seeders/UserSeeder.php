<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'fname' => 'Jorem',
            'lname' => 'Belen',
            'email' => 'iam@joreb.net',
            'mobile' => '09199406146',
            'role' => 'ADM',
            'password' => 'password',
        ]);

        $svp = User::create([
            'fname' => 'John',
            'lname' => 'Doe',
            'email' => 'john.doe@joreb.net',
            'mobile' => '09199406147',
            'role' => 'SVP',
            'password' => 'password',
        ]);
        $svp->location()->create([
            'province' => 'Cebu',
            'city' => 'Cebu City',
        ]);

        User::create([
            'fname' => 'Peter',
            'lname' => 'Parker',
            'email' => 'peter.parker@joreb.net',
            'mobile' => '09199406148',
            'password' => 'password',
        ]);


    }

}
