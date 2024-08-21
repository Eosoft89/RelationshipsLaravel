<?php

namespace Database\Seeders;

use App\Models\VeterinaryVisit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class VeterinaryVisitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VeterinaryVisit::create([
            'veterinary_name' => 'Doctor Mengueche',
            'veterinary_center' => 'PetVet',
            'visit_date' => Carbon::today(),
            'pet_id' => 1
        ]);

        VeterinaryVisit::create([
            'veterinary_name' => 'Doctor Doom',
            'veterinary_center' => 'LatveriaVet',
            'visit_date' => Carbon::today(),
            'pet_id' => 1
        ]);

        VeterinaryVisit::create([
            'veterinary_name' => 'Doctor Mengueche',
            'veterinary_center' => 'PetVet',
            'visit_date' => Carbon::today(),
            'pet_id' => 2
        ]);

        VeterinaryVisit::create([
            'veterinary_name' => 'Doctor Doom',
            'veterinary_center' => 'LatveriaVet',
            'visit_date' => Carbon::today(),
            'pet_id' => 2
        ]);

        VeterinaryVisit::create([
            'veterinary_name' => 'Doctor Simi',
            'veterinary_center' => 'SimiVet',
            'visit_date' => Carbon::today(),
            'pet_id' => 2
        ]);
    }
}
