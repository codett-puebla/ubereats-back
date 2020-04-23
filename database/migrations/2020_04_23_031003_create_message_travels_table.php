<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_travels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('message');

            $table->bigInteger('travel_id')->unsigned();
            $table->foreign('travel_id')->references('id')->on('travels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_travels');
    }
}
