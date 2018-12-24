<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortafolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portafolio', function (Blueprint $table) {
            $table->increments('id');
            $table->text('descripcion');
            $table->string('imagen', 191);
            $table->string('url', 191);
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
        Schema::dropIfExists('portafolio');
        Schema::enableForeignKeyConstraints();
    }
}
