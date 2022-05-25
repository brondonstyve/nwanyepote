<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReponseCommentaireArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reponse_commentaire_articles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('commentaire')->index()->unsigned();
            $table->bigInteger('article')->index()->unsigned();
            $table->string('nom');
            $table->string('email');
            $table->string('cweb')->nullable();
            $table->text('comment');
            $table->foreign('article')->references('id')->on('articles')->onDelete('cascade') ;
            $table->foreign('commentaire')->references('id')->on('commentaire_articles')->onDelete('cascade') ;
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
        Schema::dropIfExists('reponse_commentaire_articles');
    }
}
