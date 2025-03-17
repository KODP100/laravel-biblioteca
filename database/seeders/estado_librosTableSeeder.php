<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class estado_librosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Definir los estado_libros que se van a insertar
       $estado_libros = [
        [
            'nombre' => 'disponible',
            'descripcion' => 'sin prestamos',
        ],
        [
            'nombre' => 'reservado',
            'descripcion' => 'no posee reservas',
        ],
        [
            'nombre' => 'prestado',
            'descripcion' => 'sin disponibilidad',
        ],
        
    ];

    // Insertar estado_libros en la tabla 'estados_libros'
    DB::table('estado_libros')->insert($estado_libros);
    }
}
