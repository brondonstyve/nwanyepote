<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ObjectifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('objectifs', function (Blueprint $table) {
            $table->id();
            $table->string('titreOb')->default(null)->nullable();
            $table->string('objectif_num');
            $table->string('objectif_intitule');
            $table->text('objectif_libelet');
            $table->string('imageOb')->default(null)->nullable();
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
        Schema::drop('objectifs');
    }
}
