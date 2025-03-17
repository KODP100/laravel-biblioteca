<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipios';
    protected $primaryKey = 'id_municipio';
    public $timestamps = true;

    // Relacion con Departamento
    public function departamento()
    {
        return $this->belongsTo(Departamento::class, 'id_departamento');
    }

    // Relacion con Distrito
    public function distritos()
    {
        return $this->hasMany(Distrito::class, 'id_municipio');
    }

    // Relacion con Empleado
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_municipio');
    }

    // Relacion con Solicitante
    public function solicitantes()
    {
        return $this->hasMany(Solicitante::class, 'id_municipio');
    }
}
