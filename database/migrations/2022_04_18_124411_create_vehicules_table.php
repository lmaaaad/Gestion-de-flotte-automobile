<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id();
            $table->string('Matricule');
            $table->string('Marque');
            $table->string('Modele');
            $table->string('Etat_Actuel');
            $table->string('Couleur');
            $table->string('Num_serie');
            $table->date('Date_ms');
            $table->string('Type');
            $table->string('Carburant');
            $table->string('Wilaya');
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
        Schema::dropIfExists('vehicules');
    }
}
