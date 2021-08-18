<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('url')->nullable();
            $table->date('fecha_nac');
            $table->string('sexo');
            $table->string('raza');
            $table->string('color');
            $table->string('caracteristicas');
            $table->string('foto')->nullable();
            $table->string('solicitud')->nullable();
            $table->integer('estado')->default(1)->nullable();
            $table->integer('estado_qr')->default(0)->nullable();
            $table->foreignId('tipo_id')->constrained('tipos');
            $table->foreignId('user_id')->constrained('users');
            // $table->foreignId('solicitude_id')->constrained('solicitudes')->nullable();
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
        Schema::dropIfExists('mascotas');
    }
}
