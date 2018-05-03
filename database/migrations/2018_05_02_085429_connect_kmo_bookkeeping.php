<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConnectKmoBookkeeping extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::table('bookkeepings', function (Blueprint $table) {
            $table->unsignedinteger('kmo_id');
            $table->foreign('kmo_id')->references('id')->on('kmos');
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
            $table->dropForeign('bookkeepings_kmo_id_foreign');
            $table->dropColumn('kmo_id');
        });
    }
}
