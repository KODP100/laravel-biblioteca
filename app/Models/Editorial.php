<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Editorial extends Model
{
    protected $table = 'editoriales';
    protected $primaryKey = 'id_editorial';
    public $timestamps = true;

    // Relacion con Libro
    public function libros()
    {
        return $this->hasMany(Libro::class, 'id_editorial');
    }

    // Relacion con Autor
    public function autores()
    {
        return $this->hasMany(Autor::class, 'id_editorial');
    }
}
