<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    public $timestamps = true;

    // Relacion con EstadoUsuario
    public function estado()
    {
        return $this->belongsTo(EstadoUsuario::class, 'id_estado');
    }

    // Relacion con Empleado
    public function empleado()
    {
        return $this->hasOne(Empleado::class, 'id_usuario');
    }

    // Relacion con Solicitante
    public function solicitante()
    {
        return $this->hasOne(Solicitante::class, 'id_usuario');
    }
}
