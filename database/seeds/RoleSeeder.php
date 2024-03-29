<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'role_code' => 'PA',
            'role_name' => 'Profesor',
        ]);
        DB::table('role')->insert([
            'role_code' => 'AA',
            'role_name' => 'Alumno',
        ]);
    }
}
