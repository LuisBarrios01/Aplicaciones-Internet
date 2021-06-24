<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Decision extends Model
{
    protected $table='decision';
    protected $primaryKey = 'iddecision';
    protected $fillable =  array('numero', 'titulo');
}