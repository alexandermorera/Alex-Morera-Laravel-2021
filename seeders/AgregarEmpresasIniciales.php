<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AgregarEmpresasIniciales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = Faker::create('es_ES');
       for ($i=1; $i < 30; $i++) { 
       DB::table('empresas')->insert([
       		'nombre' => $faker->company(), 
       		'nit' => $faker->numberBetween(9999,999999),
       		'created_at' => date('Y-m-d H:m:s'),
       		'updated_at' => date('Y-m-d H:m:s')
       ]); 
       }
      
    }
}
