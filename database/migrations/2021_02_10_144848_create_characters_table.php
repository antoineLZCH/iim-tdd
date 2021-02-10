<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('sexe');
            $table->string('race');
            $table->integer('agility');
            $table->integer('chance');
            $table->integer('charisma');
            $table->integer('strength');
            $table->integer('intelligence');
            $table->integer('spirit');
            $table->integer('stamina');
            $table->integer('initiative');
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
        Schema::dropIfExists('characters');
    }
}
