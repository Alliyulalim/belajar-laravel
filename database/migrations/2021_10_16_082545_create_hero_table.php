<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateheroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hero', function (Blueprint $table) {
            $table->increments('id');
            $table->string('realname')->unique();
            $table->string('heroname');
            $table->string('power');
            $table->string('kindofpower');
            $table->string('gender');
            $table->integer('height');
            $table->integer('weight');
            $table->date('borndate');
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
        Schema::dropIfExists('hero');
    }
}
