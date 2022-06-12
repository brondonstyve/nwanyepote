<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->string('codeCom');
            $table->bigInteger('compte')->unsigned()->index();
            $table->bigInteger('produit')->unsigned()->nullable();
            $table->integer('quantite');
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('email')->nullable();
            $table->string('telephone');
            $table->string('adresse');
            $table->string('ville')->nullable();
            $table->string('pays')->nullable();
            $table->string('descripiton')->nullable();
            $table->string('typePaiement');
            $table->float('montant');
            $table->float('montant_total');
            $table->string('devise')->nullable();
            $table->boolean('status')->default(true);
            $table->foreign('compte')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('produit')->references('id')->on('produits')->constrained()->onDelete('set null');
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
        Schema::dropIfExists('commandes');
    }
}
