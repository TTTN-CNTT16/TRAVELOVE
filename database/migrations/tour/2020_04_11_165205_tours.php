<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('img');
            $table->integer('number');
            $table->unsignedBigInteger('idPlace');
            $table->text('contents');
            $table->dateTime('beginDay');
            $table->dateTime('endDay');
            $table->integer('status');
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('idPlace')->references('id')->on('place');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tours');
    }
}
