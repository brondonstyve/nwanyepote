<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PartenaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('partenaires', function (Blueprint $table) {
            $table->id();
            $table->string('logo');
            $table->string('nom_part');
            $table->string('services');
            $table->string('social_media1')->default(null)->nullable();
            $table->string('social_media2')->default(null)->nullable();
            $table->string('social_media3')->default(null)->nullable();
            $table->string('link1')->default(null)->nullable();
            $table->string('link2')->default(null)->nullable();
            $table->string('link3')->default(null)->nullable();
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
        //
        Schema::drop('partenaires');
    }
}
