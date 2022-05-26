<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccueilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accueils', function (Blueprint $table) {
            $table->id();
            //données bloc 1
            $table->string('titre1')->nullable();
            $table->text('txt_cligontants')->nullable();
            $table->text('description1')->nullable();
            $table->string('texte_bouton1')->nullable();
            $table->text('lien_bouton1')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('lien_video')->nullable();

            //données bloc2
            $table->string('titre2')->nullable();
            $table->text('description2')->nullable();

            $table->text('sous_bloc2_code_fa')->nullable();
            $table->text('sous_bloc2_titres')->nullable();
            $table->text('sous_bloc2_descriptions')->nullable();
            $table->text('sous_bloc2_textes_boutons')->nullable();
            $table->text('sous_bloc2_liens_boutons')->nullable();

            //bloc 3
            $table->string('titre3')->nullable();
            $table->text('description3')->nullable();
            $table->string('image3')->nullable();

            $table->text('sous_bloc3_titres')->nullable();
            $table->text('sous_bloc3_descriptions')->nullable();
            $table->text('sous_bloc3_textes_boutons')->nullable();
            $table->text('sous_bloc3_liens_boutons')->nullable();

            //bloc 4
            $table->string('titre4')->nullable();
            $table->text('description4')->nullable();
            $table->text('sous_bloc4_titres')->nullable();
            $table->text('sous_bloc4_descriptions')->nullable();
            $table->text('image4')->nullable();
            $table->text('image5')->nullable();
            $table->text('image6')->nullable();
            $table->text('image7')->nullable();
            $table->text('sous_bloc4_descriptions_images')->nullable();
            $table->text('texte_bouton4')->nullable();
            $table->text('lien_bouton4')->nullable();

            //bloc 5
            $table->string('titre5')->nullable();
            $table->text('description5')->nullable();
            $table->text('texte_bouton5')->nullable();
            $table->text('lien_bouton5')->nullable();

            //bloc 6
            $table->string('titre6')->nullable();
            $table->text('description6')->nullable();
            $table->text('texte_bouton6')->nullable();
            $table->text('lien_bouton6')->nullable();
            $table->string('image8')->nullable();


            //bloc 7
            $table->string('titre7')->nullable();
            $table->text('description7')->nullable();
            $table->text('texte_bouton7')->nullable();
            $table->text('lien_bouton7')->nullable();


            //bloc 8
            $table->string('titre8')->nullable();
            $table->text('description8')->nullable();
            $table->text('nb_avis_fb')->nullable();
            $table->text('nb_avis_site')->nullable();
            $table->text('nb_avis_autre')->nullable();
            $table->text('libelle_avis_fb')->nullable();
            $table->text('libelle_avis_site')->nullable();
            $table->text('libelle_avis_autre')->nullable();
            $table->string('image9')->nullable();


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
        Schema::dropIfExists('accueils');
    }
}
