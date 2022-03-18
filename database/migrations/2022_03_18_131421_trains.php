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
            $table->char('azienda', 20)->nullable();   //azienda
            $table->char('stazione_di_partenza', 30);  //stazione partenza
            $table->char('stazione_di_arrivo', 30);  //stazione arrivo
            $table->dateTime('orario_partenza', 0);  //ora partenza
            $table->dateTime('orario_arrivo', 0);  //ora arrivo
            $table->smallInteger('codice_treno');   //codice treno
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
        Schema::drop('trains');
    }
}
