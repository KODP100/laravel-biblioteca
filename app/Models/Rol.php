<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id_rol';
    public $timestamps = true;

    // Relacion con Empleado
    public function empleados()
    {
        return $this->hasMany(Empleado::class, 'id_rol');
    }
}
