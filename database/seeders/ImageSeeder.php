<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Image::create([
            'url' => 'Avatar.jpg',
            'imageable_id' => 1,
            'imageable_type' => User::class //Es necesario pasarle la clase como type en este caso el string quedaría como App\Models\User
        ]);
    }
}
