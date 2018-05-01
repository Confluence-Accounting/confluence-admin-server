<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookkeepingLicenseLink extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('bookkeepings', function (Blueprint $table) {
            $table->unsignedinteger('license_id');
            $table->foreign('license_id')->references('id')->on('licenses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('bookkeepings', function (Blueprint $table) {
            $table->dropForeign('bookkeepings_license_id_foreign');
            $table->dropColumn('license_id');
        });
    }
}
