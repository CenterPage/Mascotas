<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTemporalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascota_temporales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_mascota');
            $table->string('url')->nullable();
            $table->date('fecha_nacimiento');
            $table->string('tipo');
            $table->string('raza');
            $table->string('sexo');
            $table->string('color');
            $table->string('nombre_adulto');
            $table->string('apellidos_adulto');
            $table->string('celular');
            $table->string('direccion');
            $table->string('fecha_emision');
            $table->string('foto');
            $table->integer('estado_qr')->nullable();
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
        Schema::dropIfExists('mascotas_temporales');
    }
}
