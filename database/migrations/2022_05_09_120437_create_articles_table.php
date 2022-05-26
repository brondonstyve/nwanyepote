<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('domaine');
            $table->string('auteur');
            $table->text('desc_auteur');
            $table->text('image')->nullable();


            $table->string('titre1')->nullable();
            $table->text('article1')->nullable();
            $table->text('image1')->nullable();
            $table->string('video1')->nullable();
            

            $table->string('titre2')->nullable();
            $table->text('article2')->nullable();
            $table->text('image2')->nullable();
            $table->string('video2')->nullable();

            $table->string('titre3')->nullable();
            $table->text('article3')->nullable();
            $table->text('image3')->nullable();
            $table->string('video3')->nullable();

            $table->string('titre4')->nullable();
            $table->text('article4')->nullable();
            $table->text('image4')->nullable();
            $table->string('video4')->nullable();

            $table->string('titre5')->nullable();
            $table->text('article5')->nullable();
            $table->text('image5')->nullable();
            $table->string('video5')->nullable();

            $table->text('titreSeo')->nullable();
            $table->string('descriptionSeo')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
