<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Fixerror500 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::table('addresses', function($table)
{
        $table->string('telephone')->nullable()->change();
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
   public function down()
   {
       
       
   }

}
