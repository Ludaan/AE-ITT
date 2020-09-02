<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
             $table->integer('listas_id');
            $table->string('email')->default('');
            $table->string('carrera');
            $table->string('semestre');
          
            $table->boolean('acreditado')->default(false);
            $table->string('tel')->default('');
            $table->string('edad')->default('');
            $table->string('nocontrol')->unique();
            $table->boolean('repeticion')->default(false);
            $table->boolean('representativo')->default(false);
            $table->boolean('discapacidad')->default(false);
            $table->string('sexo')->default('');
            $table->string('ruta_foto')->default('default.jpg');
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
        Schema::dropIfExists('alumnos');
    }
}
