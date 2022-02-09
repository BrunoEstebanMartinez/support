<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Lessons extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      
       DB::table('lessons')->insert([
            'lesson_code' => 'MEC11',
            'lesson_name' => 'Mantenimiento a equipos de cómputo',
       ]);   
       DB::table('lessons')->insert([
            'lesson_code' => 'RST11',
            'lesson_name' => 'Reparación de smartphones, tabletas',
       ]);
       DB::table('lessons')->insert([
            'lesson_code' => 'RCEM11',
            'lesson_name' => 'Reperación de componentes electrónicos, microcomponentes',
       ]);
       DB::table('lessons')->insert([
            'lesson_code' => 'RE11',
            'lesson_name' => 'Reparación de electrodomésticos',
       ]);

    }
       
   
    
}
