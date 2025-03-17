<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Importa la clase DB

class rolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definir los roles que se van a insertar
        $roles = [
            ['nombre_rol' => 'super_admin'],
            ['nombre_rol' => 'administrador'],
            ['nombre_rol' => 'solicitante'],
        ];

        // Insertar los roles en la tabla 'roles'
        DB::table('roles')->insert($roles);
    }
}
