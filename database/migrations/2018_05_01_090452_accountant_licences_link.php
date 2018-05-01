<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AccountantLicencesLink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('licenses', function (Blueprint $table) {
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
        Schema::table('licenses', function (Blueprint $table) {
            $table->dropForeign('licenses_accountant_id_foreign');
            $table->dropColumn('accountant_id');
        });
    }
}
