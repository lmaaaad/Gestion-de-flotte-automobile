<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('ville')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();
            $table->string('NRC')->nullable();
            $table->string('NIF')->nullable();
            $table->string('Ncontrat')->nullable();
            $table->date('datedeb')->nullable();;
            $table->date('datefin')->nullable();;          
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
        Schema::dropIfExists('fournisseurs');
    }
}
