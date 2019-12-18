<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tarjetas', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre');
            $table->date('fecha de nacimiento');
            $table->string('numero de tarjeta');
            $table->string('RFC');
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
        Schema::dropIfExists('Tarjetas');
    }
}
