<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConocimientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conocimiento', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icono', 191);
            $table->string('titulo', 191);
            $table->text('descripcion');
            $table->integer('curriculum_id')->unsigned();
            $table->foreign('curriculum_id')->references('id')->on('curriculum');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('conocimiento');
        Schema::enableForeignKeyConstraints();
    }
}
