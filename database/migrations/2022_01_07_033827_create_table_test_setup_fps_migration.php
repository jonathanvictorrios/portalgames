<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTestSetupFpsMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_setup_fps', function (Blueprint $table) {
            $table->id('test_setup_fps_id');
            $table->unsignedDecimal('1min');
            $table->unsignedDecimal('001min');
            $table->unsignedDecimal('averageFps');
            $table->unsignedBigInteger('juego_id')->nullable();
            $table->unsignedBigInteger('usuario_id')->nullable();
            $table->unsignedBigInteger('build_pc_id')->nullable();

            $table->foreign('juego_id')->references('juego_id')->on('juego');
            $table->foreign('usuario_id')->references('usuario_id')->on('usuario');
            $table->foreign('build_pc_id')->references('build_pc_id')->on('build_pc');
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
        Schema::dropIfExists('test_setup_fps');
    }
}
