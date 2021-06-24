<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table='pais';
    protected $primaryKey = 'idpais';
    protected $fillable =  array('nombre', 'fecha_ingreso');
}
