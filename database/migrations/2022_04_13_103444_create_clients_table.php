<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
           /* $table->increments('user_id');
            $table->string('numCni');
            $table->string('nomCompletExp');
            $table->string('villeDestination'); 
            $table->string('nomCompletDest');
            $table->string('contenuColis');
            $table->string('poidsColis');
            $table->string('poidsSpecial');
            $table->string('montantTotal');
            $table->string('tarif');
            $table->string('etat');
            $table->timestamps();*/
            $table->string('nom');
            $table->string('prenom');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('vers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
