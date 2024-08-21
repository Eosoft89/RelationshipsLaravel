<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        //Definición de seeders que se llamarán

        $this->call([
            UserSeeder::class, 
            PhoneSeeder::class,
            PetSeeder::class,
            RoleSeeder::class,
            SimSeeder::class,
            VeterinaryVisitSeeder::class,
            ImageSeeder::class,
            TagSeeder::class
        ]);
    }
}
