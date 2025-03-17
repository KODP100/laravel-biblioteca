<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $table = 'autores';
    protected $primaryKey = 'id_autor';
    public $timestamps = true;

    // Relacion con Libro
    public function libros()
    {
        return $this->hasMany(Libro::class, 'id_autor');
    }

    // Relacion con Editorial
    public function editorial()
    {
        return $this->belongsTo(Editorial::class, 'id_editorial');
    }
}
