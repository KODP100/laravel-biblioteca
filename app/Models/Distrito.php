<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $table = 'distritos';
    protected $primaryKey = 'id_distrito';
    public $timestamps = true;

    // Relacion con Municipio
    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio');
    }

    // Relacion con Empleado
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_distrito');
    }

    // Relacion con Solicitante
    public function solicitantes()
    {
        return $this->hasMany(Solicitante::class, 'id_distrito');
    }
}
