<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentairesProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentaires_produits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('produit')->index()->unsigned();
            $table->string('nom');
            $table->string('email');
            $table->string('cweb')->nullable();
            $table->text('comment');
            $table->integer('etoile');
            $table->foreign('produit')->references('id')->on('produits')->onDelete('cascade') ;
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
        Schema::dropIfExists('commentaires_produits');
    }
}
