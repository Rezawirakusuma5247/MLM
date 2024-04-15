<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Reza Wirakusuma',
            'email' => 'rezawirakusuma1236@gmail.com',
            'password' => Hash::make('reza1236'),
            'codes' => 'C-002001',
            'rank' => 'Owner',
            'number' => '085218248075'
        ]);

        User::create([
            'name' => 'Reza',
            'email' => 'writer@gmail.com',
            'password' => Hash::make('reza1236'),
            'codes' => 'C-002002',
            'rank' => 'SponsorShip',
            'number' => '085218248075',
            'parent_id' => '1',
        ]);
    }
}
