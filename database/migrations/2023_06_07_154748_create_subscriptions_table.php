<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->increments('id_subscription');
            $table->string('duration');
            $table->float('price');
            $table->string('type');

            $table->integer('id_pay')->unsigned();
            $table->foreign('id_pay')->references('id_pay')->
            on('pays')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_activities')->unsigned();
            $table->foreign('id_activities')->references('id_activities')->
            on('activities')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->
            on('users');

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
        Schema::dropIfExists('subscriptions');
    }
}
