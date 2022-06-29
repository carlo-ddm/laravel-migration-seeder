<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Departures',100);
            $table->string('Arrivals',100);
            $table->time('Departures Time', 0);
            $table->time('Arrivals Time', 0);
            $table->integer('Train Code')->unsigned();
            $table->tinyInteger('Train Carriages')->unsigned();
            $table->boolean('In Time')->default(true);
            $table->boolean('Deleted')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
