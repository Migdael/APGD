<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deportistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 30);
            $table->string('apellido', 30);
            $table->integer('edad');
            $table->string('sexo', 15);
            $table->string('direccion')->nullable();
            $table->integer('telefono')->nullable();
            $table->date('fechaNacimiento');
            $table->string('cedula', 16)->nullable();
            $table->string('grado', 16)->nullable();
            $table->string('anio', 16)->nullable();
            $table->string('carrera', 16)->nullable();
            $table->string('carnet', 16)->nullable();
            $table->enum('estado', ['1', '0'])->default('1');

            $table->integer('tipo_id')->unsigned();
            $table->integer('institucion_id')->unsigned();
            $table->integer('deporte_id')->unsigned();

            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
            $table->foreign('institucion_id')->references('id')->on('instituciones')->onDelete('cascade');
            $table->foreign('deporte_id')->references('id')->on('deportes')->onDelete('cascade');
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
        Schema::dropIfExists('deportistas');
    }
}
