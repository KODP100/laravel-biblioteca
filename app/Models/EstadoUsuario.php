<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoUsuario extends Model
{
    protected $table = 'estado_usuarios';
    protected $primaryKey = 'id_estado';
    public $timestamps = true;

    // Relacion con Usuario
    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'id_estado');
    }
}
