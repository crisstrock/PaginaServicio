<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pcs', function (Blueprint $table) {
            $table->integer('item_id')->unsigned();
            $table->foreign('item_id')->references('id')->on('items');
            $table->string('num_maquina');
            $table->integer('tiene_camara');
            $table->integer('tiene_bocinas');
            $table->string('num_serie_cpu');
            $table->string('ram');
            $table->string('disco_duro');
            $table->string('sistema_operativo');
            $table->integer('sistema_operativo_activado');
            $table->string('cable_vga');
            $table->integer('tiene_monitor');
            $table->string('num_serie_monitor');
            $table->integer('tiene_teclado');
            $table->integer('tiene_raton');
            $table->string('controlador_red');
            $table->string('paq_office_version');
            $table->integer('paq_office_activado');
            $table->string('observaciones');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pcs');
    }
}
