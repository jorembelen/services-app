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

        User::create([
            'fname' => 'Admin',
            'lname' => 'Account',
            'email' => 'admin@admin.com',
            'mobile' => '09199406146',
            'role' => 'ADM',
            'password' => 'password',
        ]);

        $svp = User::create([
            'fname' => 'John',
            'lname' => 'Doe',
            'email' => 'john@doe.com',
            'mobile' => '09199406147',
            'role' => 'SVP',
            'password' => 'password',
        ]);
        $svp->location()->create([
            'province' => 'Cebu Province',
            'city' => 'Cebu City',
        ]);

        $svp2 = User::create([
            'fname' => 'Customer',
            'lname' => 'One',
            'email' => 'customer1@gmail.com',
            'mobile' => '09199406148',
            'role' => 'SVP',
            'password' => 'password',
        ]);
        $svp2->location()->create([
            'province' => 'Cebu Province',
            'city' => 'Talisay City',
        ]);

        User::create([
            'fname' => 'Peter',
            'lname' => 'Parker',
            'email' => 'peter@parker.com',
            'mobile' => '09199406148',
            'password' => 'password',
        ]);

        User::create([
            'fname' => 'User',
            'lname' => 'One',
            'email' => 'user1@gmail.com',
            'mobile' => '09199406148',
            'password' => 'password',
        ]);

    }

}
