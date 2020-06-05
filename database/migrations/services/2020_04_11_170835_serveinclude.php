<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Serveinclude extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serveincludes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->double('price');
            $table->integer('number');
            $table->string('img');
            $table->unsignedBigInteger('idTour');
            $table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->foreign('idTour')->references('id')->on('tours');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serveinclude');
    }
}
