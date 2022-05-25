<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRessourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ressources', function (Blueprint $table) {
            $table->id();
            $table->string('titre1')->nullable();
            $table->text('description1')->nullable();

            $table->string('image1')->nullable();
            $table->string('titre2')->nullable();
            $table->text('description2')->nullable();
            $table->string('question1')->nullable();
            $table->text('reponse1')->nullable();
            $table->string('question2')->nullable();
            $table->text('reponse2')->nullable();
            $table->string('question3')->nullable();
            $table->text('reponse3')->nullable();
            $table->text('description3')->nullable();

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
        Schema::dropIfExists('ressources');
    }
}
