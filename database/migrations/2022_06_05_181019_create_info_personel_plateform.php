<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoPersonelPlateform extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infocontactes', function (Blueprint $table) {
            $table->id();
            $table->string('adresse1');
            $table->string('adresse2');
            $table->string('numero1');
            $table->string('numero2')->nullable();
            $table->string('email1');
            $table->string('email2')->nullable();
            $table->string('youtube')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twiter')->nullable();
            $table->string('instagramme')->nullable();
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
        Schema::dropIfExists('infocontactes');
    }
}
