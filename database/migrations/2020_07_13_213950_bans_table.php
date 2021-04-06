<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_id');
            $table->foreign('match_id')->references('id')->on('matchs');
            $table->unsignedBigInteger('side');
            $table->foreign('side')->references('id')->on('factions');
            $table->unsignedBigInteger('hero_id');
            $table->foreign('hero_id')->references('id')->on('heros');
            $table->integer('ban_order');
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
        Schema::dropIfExists('bans');
    }
}
