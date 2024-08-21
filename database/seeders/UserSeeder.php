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
            'id' => 1,
            'name' => 'Eric',
            'email' => 'ericrojas.ing@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'id' => 2,
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'password' => Hash::make('12332178')
        ]);

        User::create([
            'id' => 3,
            'name' => 'Laura',
            'email' => 'laura@gmail.com',
            'password' => Hash::make('43445678')
        ]);
    }
}
