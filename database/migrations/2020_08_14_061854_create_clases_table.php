<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('clase1')->default(false);
            $table->boolean('clase2')->default(false);
            $table->boolean('clase3')->default(false);
            $table->boolean('clase4')->default(false);
            $table->boolean('clase5')->default(false);
            $table->boolean('clase6')->default(false);
            $table->boolean('clase7')->default(false);
            $table->boolean('clase8')->default(false);
            $table->boolean('clase9')->default(false);
            $table->boolean('clase10')->default(false);
            $table->boolean('clase11')->default(false);
            $table->boolean('clase12')->default(false);
            $table->boolean('clase13')->default(false);
            $table->boolean('clase14')->default(false);
            $table->boolean('clase15')->default(false);
            $table->boolean('clase16')->default(false);
            $table->boolean('clase17')->default(false);
            $table->boolean('clase18')->default(false);
            $table->boolean('clase19')->default(false);
            $table->boolean('clase20')->default(false);
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
        Schema::dropIfExists('clases');
    }
}
