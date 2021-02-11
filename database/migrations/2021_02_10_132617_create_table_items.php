<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->enum('quality', ['common', 'uncommon', 'rare', 'epic', 'legendary', 'artifact']);
            $table->enum('slot', ['helmet', 'shoulder', 'necklace', 'chest', 'wrist', 'hands', 'waist', 'legs', 'feet', 'ring', 'trinket']);
            $table->integer('agility');
            $table->integer('chance');
            $table->integer('charisma');
            $table->integer('strength');
            $table->integer('intelligence');
            $table->integer('spirit');
            $table->integer('stamina');
            $table->integer('initiative');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_items');
    }
}
