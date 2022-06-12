<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InfopageAproposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('info_page_apropos', function (Blueprint $table) {
            $table->id();
            $table->string('imageIf');
            $table->string('grand_titre');
            $table->string('titre1');
            $table->string('titre2');
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
        Schema::drop('info_page_apropos');
    }
}
