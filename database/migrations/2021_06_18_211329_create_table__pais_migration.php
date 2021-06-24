<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePaisMigration extends Migration
{
     
     /*
     * @return void
     */
    public function up()
    {
        Schema::create('pais', function (Blueprint $table) {
            $table->increments('idpais');
            $table->string('nombre');
            $table->string('fecha_ingreso');
            $table->timestamps(); 
        });
    }

    
     /*
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pais');
    }
}