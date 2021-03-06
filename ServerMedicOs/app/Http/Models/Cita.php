<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    //nombre de la tabla
    protected $table = 'cita';

    //llave primaria
    protected $primaryKey = 'id_cita';
    public $timestamps = false;
    //nomenclatura status c,p,e
    //aqui los elementos a mostrarse en la tabla 
    protected $filltable = [
        'id_cita',
        'id_paciente',
        'id_medico',
        'fecha',
        'hora',
        'latitud',
        'longitud',
        'diagnostico',
        'sintomas',
        'costo',
        'tipo_cita',
        'status'
    ];
}