<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumRedSocialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_red_social', function (Blueprint $table) {
            $table->integer('curriculum_id')->unsigned();
            $table->integer('red_social_id')->unsigned();
            $table->string('url', 191);
            $table->primary(['curriculum_id', 'red_social_id']);
            $table->foreign('curriculum_id')->references('id')->on('curriculum');
            $table->foreign('red_social_id')->references('id')->on('red_social');
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
        Schema::dropIfExists('curriculum_red_social');
        Schema::enableForeignKeyConstraints();
    }
}
