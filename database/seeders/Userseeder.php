<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'role_id' => 1, 
                'name' => 'Dylano',
                'username' => 'Dylano12345',
                'password' => Hash::make('test12345'),
                'email' => 'dqdebie@gmail.com',
                'bio' => 'Collector of rare items',
            ],
            [
                'role_id' => 2, 
                'name' => 'Bob',
                'username' => 'bob456',
                'password' => Hash::make('password'),
                'email' => 'bob@example.com',
                'bio' => 'Trader and warrior',
            ],
        ]);
    }
}