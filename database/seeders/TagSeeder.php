<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create([
            'name' => 'Programación'
        ]);

        Tag::create([
            'name' => 'Informática'
        ]);

        //Como no existe clase Taggable (tabla de relación muchos a muchos, usada a la vez en relación polimórfica) se utilizará este seeder para sembrar
        //la tabla taggable

        DB::table('taggable')->insert([
            'tag_id' => 1,
            'taggable_id' => 1,
            'taggable_type' => User::class //Básicamente, se indica que la tabla relaciona el tag 1 al usuario con id 1. La polimorfia se usa para permitir que, en este caso, la tabla tag también se pueda asociar a la tabla Video (o cualquier otra)
        ]);

        DB::table('taggable')->insert([
            'tag_id' => 2,
            'taggable_id' => 1,
            'taggable_type' => User::class
        ]);
    }
}
