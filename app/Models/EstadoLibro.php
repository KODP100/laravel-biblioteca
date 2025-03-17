<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoLibro extends Model
{
    protected $table = 'estado_libros';
    protected $primaryKey = 'id_estado_libro';
    public $timestamps = true;

    // Relacion con Libro
    public function libros()
    {
        return $this->hasMany(Libro::class, 'id_estado_libro');
    }
}
