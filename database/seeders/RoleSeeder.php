<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'id' => 1,
            'name' =>'admin' 
        ]);

        Role::create([
            'id' => 2,
            'name' =>'staff' 
        ]);

        Role::create([
            'id' => 3,
            'name' =>'user' 
        ]);

        Role::create([
            'id' => 4,
            'name' =>'guest' 
        ]);


        //Se usa esto para ahorrar un seeder en el ejemplo, pero podría ser un seeder aparte
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 1,
            'added_by' => 'Dante'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 1,
            'added_by' => 'Vergil'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 2,
            'user_id' => 1,
            'added_by' => 'Nero'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 4,
            'user_id' => 2,
            'added_by' => 'Dante'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 3,
            'user_id' => 2,
            'added_by' => 'Dante'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => 3,
            'added_by' => 'Vergil'
        ]);

        DB::table('role_user')->insert([
            'role_id' => 4,
            'user_id' => 3,
            'added_by' => 'Nero'
        ]);
    }
}
