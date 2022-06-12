<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('collection')->index()->unsigned();
            $table->string('libelle')->nullable();
            $table->string('marque')->nullable();
            $table->double('prix')->nullable();
            $table->integer('etoile')->nullable()->default(4);
            $table->integer('quantite')->unsigned();
            $table->string('image')->nullable();
            $table->string('img_principale')->nullable();
            $table->text('couleur')->nullable();
            $table->text('description')->nullable();
            $table->text('titreSeo')->nullable();
            $table->text('descriptionSeo')->nullable();
            $table->foreign('collection')->on('collections')->references('id')->onDelete('cascade');
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
        Schema::dropIfExists('produits');
    }
}
