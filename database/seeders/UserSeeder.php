<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Peter',
            'last_name' => 'Admin',
            'email' => 'admin@pakosha.nl',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        PersonalInfo::create([
            'user_id' => $admin->id,
            'street' => 'Dijkstraat',
            'house_number' => '99',
            'zipcode' => '1234 AB',
            'city' => 'Amsterdam',
            'land' => 'The Netherlands',
            'phone_number' => '06-12345678',
        ]);

        $user = User::create([
            'name' => 'Jan',
            'last_name' => 'Janssen',
            'email' => 'test@pakosha.nl',
            'password' => Hash::make('12345678'),
        ]);

        // PersonalInfo voor normale user
        PersonalInfo::create([
            'user_id' => $user->id,
            'street' => 'Teststraat',
            'house_number' => '10',
            'zipcode' => '4321 BA',
            'city' => 'Utrecht',
            'land' => 'The Netherlands',
            'phone_number' => '06-87654321',
        ]);
    }
}
