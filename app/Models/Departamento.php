<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamentos';
    protected $primaryKey = 'id_departamento';
    public $timestamps = true;

    // Relacion con Municipio
    public function municipios()
    {
        return $this->hasMany(Municipio::class, 'id_departamento');
    }

    // Relacion con Empleado
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_departamento');
    }

    // Relacion con Solicitante
    public function solicitantes()
    {
        return $this->hasMany(Solicitante::class, 'id_departamento');
    }
}
