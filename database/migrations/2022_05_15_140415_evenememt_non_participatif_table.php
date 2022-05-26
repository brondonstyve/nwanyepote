<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EvenememtNonParticipatifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('np_evenements', function (Blueprint $table) {
            $table->id();
            $table->string('imagenp');
            $table->string('titres');
            $table->string('titres1');
            $table->string('libelet1a');
            $table->string('libelet1b');
            $table->string('libelet1c');
            $table->string('personne_importantes');
            $table->string('titres2');
            $table->string('libelet2a');
            $table->string('libelet2b');
            $table->string('directeur_publication');
            $table->string('apropoDP');
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
        Schema::drop('np_evenements');
    }
}
