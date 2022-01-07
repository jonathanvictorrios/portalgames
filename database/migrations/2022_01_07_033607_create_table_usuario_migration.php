<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsuarioMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('usuario_id');
            $table->string('dni');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email');
            $table->string('clave');
            $table->timestamps();
            $table->unsignedBigInteger('rol_id')->nullable();

            $table->foreign('rol_id')->references('rol_id')->on('rol');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
