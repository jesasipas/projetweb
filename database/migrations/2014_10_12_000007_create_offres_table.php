<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->string('nomOffre');
            $table->string('competance');
            $table->string('lieuStage');
            $table->string('typePromo');
            $table->decimal('dureeJour');
            $table->date('dateDebut');
            $table->decimal('nbPlace');
            $table->decimal('baseRemunerationEuro');
            $table->boolean('masqueOffre');
            $table->longText('detailOffre');
            $table->timestamps();
            $table->foreignId('entreprises_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
}
