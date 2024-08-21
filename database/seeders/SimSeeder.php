<?php

namespace Database\Seeders;

use App\Models\Sim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sim::create([
            'id' => 1,
            'serial_number' => '12qeqw1335',
            'company_name' => 'WOM',
            'phone_id' => 1
        ]);
    }
}
