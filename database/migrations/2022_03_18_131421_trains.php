<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Trains extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('trains', function (Blueprint $table){
            $table->id();
            $table->string('azienda', 20)->nullable();   //azienda
            $table->string('stazione_di_partenza', 30);  //stazione partenza
            $table->string('stazione_di_arrivo', 30);  //stazione arrivo
            $table->dateTime('orario_partenza');  //ora partenza
            $table->dateTime('orario_arrivo');  //ora arrivo
            $table->smallInteger('codice_treno')->unsigned(); //codice treno
            $table->boolean('treno_in_orario', true); //treno in orario
            $table->boolean('cancellato', true); //treno in partenza
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
        Schema::dropIfExists('trains');
    }
}
