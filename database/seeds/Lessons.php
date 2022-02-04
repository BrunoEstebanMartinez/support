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
            'lesson' => 'Mantenimiento a equipos de cómputo',
       ]);   
       DB::table('lessons')->insert([
            'lesson' => 'Reparación de smartphones, tabletas',
       ]);
       DB::table('lessons')->insert([
            'lesson' => 'Reperación de componentes electrónicos, microcomponentes',
       ]);
       DB::table('lessons')->insert([
            'lesson' => 'Reparación de electrodomésticos',
       ]);

    }
       
   
    
}
