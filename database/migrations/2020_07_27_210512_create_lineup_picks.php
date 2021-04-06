<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineupPicks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineup_picks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lineup_id');
            $table->foreign('lineup_id')->references('id')->on('lineups');
            $table->unsignedBigInteger('hero_id');
            $table->foreign('hero_id')->references('id')->on('heros');
            $table->unsignedBigInteger('position');
            $table->foreign('position')->references('id')->on('positions');
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
        Schema::dropIfExists('lineup_picks');
    }
}
