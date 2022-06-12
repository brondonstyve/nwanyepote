<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentaireEvenementParticipatifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire_evenement_participatifs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('evenement')->index()->unsigned();
            $table->string('nom');
            $table->string('email');
            $table->string('cweb')->nullable();
            $table->text('comment');
            $table->foreign('evenement')->references('id')->on('evenementparticipatifs')->onDelete('cascade') ;
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
        Schema::dropIfExists('commentaire_evenement_participatifs');
    }
}
