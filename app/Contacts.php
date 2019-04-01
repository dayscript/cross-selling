<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{

	//protected $primaryKey = 'key';
    public $fillable = ['key', 'tipo_documento', 'id_tomador', 'nombre', 'celular', 'correo', 'director', 'celular_director', 'correo_director', 'envio_form'];
}
