<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('evenement')->index()->unsigned();
            $table->bigInteger('user')->index()->unsigned();
            $table->string('pays')->nullable();
            $table->string('ville')->nullable();
            $table->string('adresse')->nullable();
            $table->text('video')->nullable();
            $table->text('image')->nullable();
            $table->text('apropos')->nullable();
            $table->date('naissance')->nullable();
            $table->integer('voie')->default(0);
            $table->boolean('statut')->default(false);
            $table->foreign('evenement')->references('id')->on('evenementparticipatifs')->onDelete('cascade');
            $table->foreign('user')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('participants');
    }
}
