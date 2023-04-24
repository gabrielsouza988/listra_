<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('foto', 255);
            $table->string('cidade', 255);
            $table->string('marca', 255);
            $table->string('modelo', 255);
            $table->longText('descrição');
            $table->integer('ano');
            $table->integer('quilometragem');
            $table->string('tipo', 255);
            $table->string('telefone');
            $table->float('valor', 10, 2);
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
        Schema::dropIfExists('vehicles');
    }
}
