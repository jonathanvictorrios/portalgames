<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableComentarioUsuarioTestMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario_usuario_test', function (Blueprint $table) {
            $table->id('comentario_usuario_test_id');
            $table->unsignedBigInteger('comentario_id')->nullable();
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->unsignedBigInteger('test_setup_fps_id')->nullable();
            $table->timestamps();

            $table->foreign('comentario_id')->references('comentario_id')->on('comentario');
            $table->foreign('usuario_id')->references('usuario_id')->on('usuario');
            $table->foreign('test_setup_fps_id')->references('test_setup_fps_id')->on('test_setup_fps');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario_usuario_test');
    }
}
