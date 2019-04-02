<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    public $fillable = ['tipo_documento', 'cedula', 'nombres', 'apellidos', 'celular', 'correo', 'salud', 'vida', 'hogar', 'autos', 'terminos_condiciones', 'tratamiento_datos'];
}
