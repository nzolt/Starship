<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipArmamentsFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('armament_starships', function(Blueprint $table)
        {
            $table->foreign('ship_id','fk_starship_id')->references('id')->on('starship')->cascadeOnDelete();
            $table->foreign('armament_id','fk_armament_id')->references('id')->on('armaments')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('armament_starsips', function(Blueprint $table)
        {
            $table->dropForeign('fk_starship_id');
            $table->dropForeign('fk_armament_id');
        });
    }
}
