<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContacteInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('contacte_infos', function (Blueprint $table) {
            $table->id();
            $table->string('titre_page');
            $table->string('libelet_page');
            $table->string('titre_formulaire');
            $table->string('libelet_formulaire');
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
        Schema::drop('contacte_infos');
    }
}
