<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InfoEvenementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('info_evenements', function (Blueprint $table) {
            $table->id();
            $table->string('grang_titre');
            $table->string('libelet');
            $table->string('titre1');
            $table->string('libelet1');
            $table->string('titre2');
            $table->string('libelet2');
            $table->string('titre3');
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
        Schema::drop('info_evenements');
    }
}
