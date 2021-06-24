<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProductoMigration extends Migration
{
   
     /*
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->increments('idproducto');
            $table->string('nombre');
            $table->string('fecha_exportacion');
            $table->string('pais_origen');
            $table->string('pais_importacion');
            $table->string('descripcion');
            $table->timestamps(); 
        });
    }

    
     /*
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}