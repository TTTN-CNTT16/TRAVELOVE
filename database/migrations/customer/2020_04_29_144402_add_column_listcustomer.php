<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnListcustomer extends Migration
{
   
    public function up()
    {
        Schema::table('listcustomer', function (Blueprint $table) {
            $table->string('name');
            $table->string('sexes');
            $table->string('phone');
        });
    }

   
    public function down()
    {
        Schema::table('listcustomer', function (Blueprint $table) {
            $table->string('name');
            $table->string('sexes');
            $table->string('phone');
        });
    }
}
