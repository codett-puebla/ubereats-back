<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->decimal('total',10, 5);
            $table->integer('status')->default(\App\order::NEW);
            $table->time('hour');
            $table->unsignedBigInteger('restaurant_id');
            $table->unsignedBigInteger('travels_id');
            $table->timestamps();

            $table->foreign('restaurant_id')->references('id')->on('restaurants');
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
        Schema::dropIfExists('orders');
    }
}
