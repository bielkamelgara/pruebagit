<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id_activities');
            $table->datetime('date');

            $table->integer('id_test')->unsigned();
            $table->foreign('id_test')->references('id')->
            on('tests')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_media')->unsigned();
            $table->foreign('id_media')->references('id')->
            on('mediafiles')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_calendar')->unsigned();
            $table->foreign('id_calendar')->references('id_calendar')->
            on('calendars')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_exercises')->unsigned();
            $table->foreign('id_exercises')->references('id')->
            on('exercises')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('activities');
    }
}
