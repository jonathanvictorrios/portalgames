<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableJuegoMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juego', function (Blueprint $table) {
            $table->id('juego_id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->year('anioLanzamiento');
            $table->string('genero');
            $table->string('imagen_url');
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
        Schema::dropIfExists('juego');
    }
}
