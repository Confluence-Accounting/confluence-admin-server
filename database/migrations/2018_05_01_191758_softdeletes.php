<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Softdeletes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('accountants', function ($table) {
            $table->softDeletes();
        });
         Schema::table('addresses', function ($table) {
            $table->softDeletes();
        });
        Schema::table('bookkeepings', function ($table) {
            $table->softDeletes();
        });
        Schema::table('employees', function ($table) {
            $table->softDeletes();
        });
        Schema::table('invoices', function ($table) {
            $table->softDeletes();
        });
        Schema::table('kmos', function ($table) {
            $table->softDeletes();
        });
        Schema::table('licenses', function ($table) {
            $table->softDeletes();
        });
        Schema::table('transactions', function ($table) {
            $table->softDeletes();
        });
        Schema::table('users', function ($table) {
            $table->softDeletes();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //NOT NECESSARY
    }
}
