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
            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
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
