<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='producto';
    protected $primaryKey = 'idproducto';
    protected $fillable =  array('nombre', 'fecha_exportacion', 'pais_origen', 'pais_importacion', 'descripcion');
}