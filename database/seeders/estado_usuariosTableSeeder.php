<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estado_usuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definir los estados de usuario que se van a insertar
        $estados = [
            ['estado_usuario' => 'baja'],
            ['estado_usuario' => 'alta'],
            ['estado_usuario' => 'suspendido'],
        ];

        // Insertar los estados en la tabla 'estado_usuarios'
        DB::table('estado_usuarios')->insert($estados);
    }
}
