<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commisions', function (Blueprint $table) {
            $table->id();
            $table->Integer("level_1");
            $table->Integer("level_2");
            $table->Integer("level_3");
            $table->Integer("level_4");
            $table->Integer("level_5");
            $table->Integer("level_6");
            $table->Integer("level_7");
            $table->Integer("daily_commision");
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
        Schema::dropIfExists('commisions');
    }
}
