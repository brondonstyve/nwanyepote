<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Null_;

class AproposBatieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('apropo_baties', function (Blueprint $table) {
            $table->id();
            $table->string('titreab');
            $table->text('text1ab');
            $table->text('text2ab');
            $table->string('imageab');
            $table->text('lireplusab')->default(null)->nullable();
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
        Schema::drop('apropo_baties');
    }
}
