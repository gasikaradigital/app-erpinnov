<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Admin User
        $superadmin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('superadmin@gmail.com'),
            'email_verified_at' => now(),
        ]);
        $superadmin->assignRole('superadmin');

        $manager = User::create([
            'name' => 'Manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt('manager123'),
            'email_verified_at' => now(),
        ]);
        $manager->assignRole('manager');

        // Creating Client User
        $client = User::create([
            'name' => 'Client',
            'email' => 'client@mail.com',
            'password' => bcrypt('client123'),
            'email_verified_at' => now(),
        ]);
        $client->assignRole('client');

    }
}
