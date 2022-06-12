<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddImageAndEditionNpevenementsTable extends Migration
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
            $table->string('edition')->after('titres');
            $table->string('image_principal')->after('imagenp');
            $table->string('imagedp')->after('apropoDP');
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
            $table->dropColumn('edition');
            $table->dropColumn('image_principal');
            $table->dropColumn('imagedp');
        });
    }
}
