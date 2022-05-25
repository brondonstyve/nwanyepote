<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentaireArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaire_articles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('article')->index()->unsigned();
            $table->string('nom');
            $table->string('email');
            $table->string('cweb')->nullable();
            $table->text('comment');
            $table->foreign('article')->references('id')->on('articles')->onDelete('cascade') ;
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
        Schema::dropIfExists('commentaire_articles');
    }
}
