<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KmoAdresManytomany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
     
        Schema::create('address_kmo', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedinteger('kmo_id');
            $table->foreign('kmo_id')->references('id')->on('kmos');
            
            $table->unsignedinteger('address_id');
            $table->foreign('address_id')->references('id')->on('addresses');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('address_kmo');
    }
}