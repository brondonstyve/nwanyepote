<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CaracteristiqueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('caracteristiques', function (Blueprint $table) {
            $table->id();
            $table->string('titreC')->default(null)->nullable();
            $table->string('caract_num');
            $table->string('caract_intitule');
            $table->text('caract_libelet');
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
        Schema::drop('caracteristiques');
    }
}
