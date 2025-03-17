<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definir las categorías que se van a insertar
        $categorias = [
            [
                'nombre' => 'Literatura Ficción',
                'descripcion' => 'Obras que narran historias imaginarias, creadas por el autor.',
            ],
            [
                'nombre' => 'Poesía',
                'descripcion' => 'Expresión artística a través del lenguaje rítmico y metafórico. Se enfoca en emociones, belleza y reflexión.',
            ],
            [
                'nombre' => 'Teatro',
                'descripcion' => 'Obras escritas para ser representadas en escena, con diálogos y acotaciones.',
            ],
            [
                'nombre' => 'Infantil y Juvenil',
                'descripcion' => 'Libros dirigidos a niños y adolescentes, con lenguaje y temas adaptados a su edad.',
            ],
            [
                'nombre' => 'Cómic y Novela Gráfica',
                'descripcion' => 'Narraciones visuales que combinan ilustraciones y texto.',
            ],
            [
                'nombre' => 'Religión y Espiritualidad',
                'descripcion' => 'Libros que exploran creencias, prácticas religiosas y temas espirituales.',
            ],
            [
                'nombre' => 'Negocios y Economía',
                'descripcion' => 'Obras que tratan sobre gestión empresarial, finanzas y estrategias económicas.',
            ],
            [
                'nombre' => 'Arte y Fotografía',
                'descripcion' => 'Libros que exploran técnicas artísticas, historia del arte o muestran obras visuales.',
            ],
            [
                'nombre' => 'Viajes y Geografía',
                'descripcion' => 'Libros que exploran lugares, culturas y experiencias de viaje.',
            ],
            [
                'nombre' => 'Cocina y Gastronomía',
                'descripcion' => 'Libros que tratan sobre recetas, técnicas culinarias y cultura gastronómica.',
            ],
            [
                'nombre' => 'Educación y Referencia',
                'descripcion' => 'Libros diseñados para enseñar o proporcionar información específica.',
            ],
        ];

        // Insertar las categorías en la tabla 'categorias'
        DB::table('categorias')->insert($categorias);
    }
}
