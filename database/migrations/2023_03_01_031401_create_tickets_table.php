<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('direccion');
            $table->string('zona');
            $table->string('estado');//activo, en proceso o inactivo
            $table->string('correo');
            $table->string('telefono');
            $table->foreignId('tecnicoAsignado')->nullable();//puede ser nulo ya que el tecnico aun no puede estar asignado
            $table->foreign('tecnicoAsignado')->references('id')->on('tecnicos');
            $table->foreignId('id_solicitudTicket')->nullable();//puede ser nula ya que no todo ticket ingresado vendra de un cliente
            $table->foreign('id_solicitudTicket')->references('id')->on('solicitud_tickets');
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
        Schema::dropIfExists('tickets');
    }
};
