<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDroitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('droits', function (Blueprint $table) {
            $table->id();
            $table->boolean('rechercherent');
            $table->boolean('modifent');
            $table->boolean('creerent');
            $table->boolean('evalent');
            $table->boolean('supent');
            $table->boolean('consulent');
            $table->boolean('rechercheroffre');
            $table->boolean('creeroffre');
            $table->boolean('modifoffre');
            $table->boolean('suppoffre');
            $table->boolean('consulstatoffre');
            $table->boolean('recherchepilot');
            $table->boolean('creerpilot');
            $table->boolean('modifpilot');
            $table->boolean('supppilot');
            $table->boolean('recherchedele');
            $table->boolean('creerdele');
            $table->boolean('modifdele');
            $table->boolean('suppdele');
            $table->boolean('recherhceretud');
            $table->boolean('creeretud');
            $table->boolean('modifetud');
            $table->boolean('suppetud');
            $table->boolean('consultstatetud');
            $table->boolean('step3');
            $table->boolean('step4');
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
        Schema::dropIfExists('droits');
    }
}
