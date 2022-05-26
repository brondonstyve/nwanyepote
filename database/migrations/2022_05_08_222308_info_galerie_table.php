<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InfoGalerieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('info_galeries', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->text('libelet');
            $table->string('titreb1');
            $table->text('libeletb1');
            $table->string('texteb2');
            $table->string('titreb2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('info_galeries');
    }
}
