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
            'role' => 'ADM',
            'password' => 'password',
        ]);

        User::create([
            'fname' => 'John',
            'lname' => 'Doe',
            'email' => 'john.doe@joreb.net',
            'role' => 'SVP',
            'password' => 'password',
        ]);

        User::create([
            'fname' => 'Peter',
            'lname' => 'Parker',
            'email' => 'peter.parker@joreb.net',
            'password' => 'password',
        ]);


    }

}
