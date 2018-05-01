<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountantAdresManytomany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign('addresses_accountant_id_foreign');
            $table->dropColumn('accountant_id');
        });
        Schema::create('accountant_address', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedinteger('accountant_id');
            $table->foreign('accountant_id')->references('id')->on('accountants');
            
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
        Schema::dropIfExists('accountant_address');
        Schema::table('addresses', function (Blueprint $table) {
            $table->unsignedinteger('accountant_id');
        });
    }
}
