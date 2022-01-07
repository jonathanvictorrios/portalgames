<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBuildPcMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('build_pc', function (Blueprint $table) {
            $table->id('build_pc_id');
            $table->unsignedBigInteger('procesador_id')->nullable();
            $table->unsignedBigInteger('placa_video_id')->nullable();
            $table->unsignedBigInteger('ram_id')->nullable();
            $table->timestamps();

            $table->foreign('procesador_id')->references('procesador_id')->on('procesador');
            $table->foreign('placa_video_id')->references('placa_video_id')->on('placa_video');
            $table->foreign('ram_id')->references('ram_id')->on('ram');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('build_pc');
    }
}
