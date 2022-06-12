<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('np_evenements', function (Blueprint $table) {
            //
            $table->dropColumn('edition');
            $table->dropColumn('personne_importantes');
            $table->dropColumn('titres2');
            $table->dropColumn('libelet2a');
            $table->dropColumn('libelet2b');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('np_evenements', function (Blueprint $table) {
            //
            $table->string('edition');
            $table->string('personne_importantes');
            $table->string('titres2');
            $table->string('libelet2a');
            $table->string('libelet2b');
        });
    }
}
