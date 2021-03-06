<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AgregarEmpleadosIniciales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('es_ES');
        for ($i=0; $i < 200 ; $i++) { 
        
        DB::table('empleados')->insert([
            'created_at' => date('Y-m-d H:m:s'),
       		'updated_at' => date('Y-m-d H:m:s'),
        	'nombre' => $faker->name(),
        	'lugar_nacimiento' => $faker -> city(),
        	'fecha_nacimiento' => $faker -> dateTimeThisCentury(),
        	'telefono' => $faker -> numberBetween(99999900000,9999999999999),
        	'cargo' => $faker -> jobTitle(),
        	'estado' => $faker -> randomElement(['contratado','suspendido','prueba']),
        	'codigo' => $faker -> numberBetween(0,99000),
        	'empresa_id' => $faker -> numberBetween(1,30)

        	]);
        }
    }
}
