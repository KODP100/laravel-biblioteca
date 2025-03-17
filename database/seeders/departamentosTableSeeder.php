<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definir los departamentos que se van a insertar
        $departamentos = [
            ['nombre_depto' => 'Santa Ana'],
            ['nombre_depto' => 'Sonsonate'],
            ['nombre_depto' => 'Ahuachapán'],
            ['nombre_depto' => 'Chalatenango'],
            ['nombre_depto' => 'San Salvador'],
            ['nombre_depto' => 'La Libertad'],
            ['nombre_depto' => 'Cuscatlán'],
            ['nombre_depto' => 'La Paz'],
            ['nombre_depto' => 'Cabañas'],
            ['nombre_depto' => 'San Vicente'],
            ['nombre_depto' => 'Usulután'],
            ['nombre_depto' => 'San Miguel'],
            ['nombre_depto' => 'Morazán'],
            ['nombre_depto' => 'La Unión'],
        ];

        // Insertar los departamentos en la tabla 'departamentos'
        DB::table('departamentos')->insert($departamentos);
    }
}
