<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        User::create([
            'name' => 'mariana',
            'email' => 'mi@example.com',
            'password' => Hash::make('123456'), // Hashing the password
        ]);

        Task::factory(20)->create();
    }
}
