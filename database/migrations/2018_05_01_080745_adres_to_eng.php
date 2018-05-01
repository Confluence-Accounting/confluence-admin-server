<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdresToEng extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('adres');
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('housenumber');
            $table->string('street');
            $table->string('zipcode');
            $table->string('country');
            $table->timestamps();
        });
        Schema::table('addresses', function (Blueprint $table) {
            $table->unsignedinteger('accountant_id');
            $table->foreign('accountant_id')->references('id')->on('accountants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adres');
        Schema::create('adres', function (Blueprint $table) {
            $table->increments('id');
            $table->string('housenumber');
            $table->string('street');
            $table->string('zipcode');
            $table->string('country');
            $table->timestamps();
        });
        Schema::table('adres', function (Blueprint $table) {
            $table->unsignedinteger('accountant_id');
            //$table->foreign('accountant_id')->references('id')->on('accountants');
        });
        Schema::dropIfExists('addresses');
    }
}
