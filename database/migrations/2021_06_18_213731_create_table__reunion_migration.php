<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReunionMigration extends Migration
{
    /* Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reunion', function (Blueprint $table) {
            $table->increments('idreunion');
            $table->string('fecha_ingreso');
            $table->string('fecha_fin');
            $table->string('numero');
            $table->string('doc_final');
            $table->string('modalidad');
            $table->string('estado');
            $table->string('cuidad_pais');
            $table->timestamps(); 
        });
    }

    /* Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reunion');
    }
}
