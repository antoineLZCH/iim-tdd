<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdventuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adventures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->enum('status', ['in progress', 'finished', 'not started']);
            $table->integer('level');
            $table->string('description');
            $table->integer('duration');
            $table->string('email')->nullable();
            $table->foreign('email')->references('email')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adventures');
    }
}
