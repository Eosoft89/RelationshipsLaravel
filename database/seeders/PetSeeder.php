<?php

namespace Database\Seeders;

use App\Models\Pet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Pet::create([
            'name' => 'Dingo',
            'type' => 'Perro',
            'user_id' => 1
        ]);

        Pet::create([
            'name' => 'Pterodáctilo',
            'type' => 'Gato',
            'user_id' => 1
        ]);

    }
}
