<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddModalToApropoBaties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('apropo_baties', function (Blueprint $table) {
            //
            $table->string('modal')->after('lireplusab');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('apropo_baties', function (Blueprint $table) {
            //
            $table->dropColumn('modal');
        });
    }
}
