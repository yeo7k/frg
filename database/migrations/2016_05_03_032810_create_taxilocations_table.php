<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxilocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxilocations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locationX');
            $table->string('locationY');
            $table->integer('userid')->unique ();
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
        Schema::drop('taxilocations');
    }
}
