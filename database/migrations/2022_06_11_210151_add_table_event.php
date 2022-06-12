<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableEvent extends Migration
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
            $table->string('video1')->after('imagenp')->nullable();
            $table->string('imagenp2')->after('imagedp')->nullable();
            $table->string('video2')->after('imagenp2')->nullable();
            $table->string('titres2')->after('video2')->nullable();
            $table->string('libelet2a')->after('titres2')->nullable();
            $table->string('libelet2b')->after('libelet2a')->nullable();
            $table->string('libelet2c')->after('libelet2b')->nullable();
            $table->string('imagenp3')->after('libelet2c')->nullable();
            $table->string('video3')->after('imagenp3')->nullable();
            $table->string('titres3')->after('video3')->nullable();
            $table->string('libelet3a')->after('titres3')->nullable();
            $table->string('libelet3b')->after('libelet3a')->nullable();
            $table->string('libelet3c')->after('libelet3b')->nullable();
            $table->string('imagenp4')->after('libelet3c')->nullable();
            $table->string('video4')->after('imagenp4')->nullable();
            $table->string('titres4')->after('video4')->nullable();
            $table->string('libelet4a')->after('titres4')->nullable();
            $table->string('libelet4b')->after('libelet4a')->nullable();
            $table->string('libelet4c')->after('libelet4b')->nullable();
            $table->string('imagenp5')->after('libelet4c')->nullable();
            $table->string('video5')->after('imagenp5')->nullable();
            $table->string('titres5')->after('video5')->nullable();
            $table->string('libelet5a')->after('titres5')->nullable();
            $table->string('libelet5b')->after('libelet5a')->nullable();
            $table->string('libelet5c')->after('libelet5b')->nullable();
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
            $table->dropColumn('video1');
            $table->dropColumn('imagenp2');
            $table->dropColumn('video2');
            $table->dropColumn('titres2');
            $table->dropColumn('libelet2a');
            $table->dropColumn('libelet2b');
            $table->dropColumn('libelet2c');
            $table->dropColumn('imagenp3');
            $table->dropColumn('video3');
            $table->dropColumn('titres3');
            $table->dropColumn('libelet3a');
            $table->dropColumn('libelet3b');
            $table->dropColumn('libelet3c');
            $table->dropColumn('imagenp4');
            $table->dropColumn('video4');
            $table->dropColumn('titres4');
            $table->dropColumn('libelet4a');
            $table->dropColumn('libelet4b');
            $table->dropColumn('libelet4c');
            $table->dropColumn('imagenp5');
            $table->dropColumn('video5');
            $table->dropColumn('titres5');
            $table->dropColumn('libelet5a');
            $table->dropColumn('libelet5b');
            $table->dropColumn('libelet5c');
        });
    }
}
