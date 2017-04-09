<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableGifs extends Migration
{
    /**
     * Run the migrations.
     * Create Table Gifs
     * @return void
     */
    public function up()
    {
        Schema::create('gifs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('gif');
            $table->text('slug');
            $table->text('description');
            $table->tinyInteger('autorize')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Delete table Gifs
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
