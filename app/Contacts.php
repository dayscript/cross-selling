<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{

	protected $primaryKey = 'key';
    public $fillable = ['key', 'tipo_documento', 'cedula', 'nombres', 'apellidos', 'celular', 'correo', 'nomage', 'director', 'celular_director', 'correo_director'];
}
