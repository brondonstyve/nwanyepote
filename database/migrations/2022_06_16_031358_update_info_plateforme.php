<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInfoPlateforme extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('infocontactes', function (Blueprint $table) {
            //
            $table->string('cartegooglemap', 5000)->after('instagramme')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('infocontactes', function (Blueprint $table) {
            //
            $table->dropColumn('cartegooglemap');
        });
    }
}
