<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('event_id');
            $table->unsignedInteger('sport_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('event_id')->references('id')->on('events');
            $table->foreign('sport_id')->references('id')->on('sports');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
