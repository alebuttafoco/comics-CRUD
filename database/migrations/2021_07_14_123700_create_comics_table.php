<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('path')->nullable(); // immagine
            $table->string('title', 50); //titolo
            $table->text('description')->nullable(); // descrizione
            $table->year('year'); //anno pubblicazione
            $table->integer('vote')->nullable(); //valutazione
            $table->decimal('price', 5, 2); //prezzo 
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
        Schema::dropIfExists('comics');
    }
}
