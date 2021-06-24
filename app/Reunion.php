<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reunion extends Model
{
    protected $table='reunion';
    protected $primaryKey = 'idreunion';
    protected $fillable =  array('fecha_ingreso', 'fecha_fin', 'numero', 'doc_final', 'modalidad', 'estado', 'cuidad_pais');
}