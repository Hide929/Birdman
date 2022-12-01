<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('year_id')->constrained();
            $table->string('team_name',50);
            $table->string('player_name', 50);
            $table->foreignId('Age')->nullable();
            $table->string('distance',50);
            $table->foreignId('award_id')->constrained();
            $table->foreignId('rank')->nullable();
            $table->string('other', 50)->nullable();
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
        Schema::dropIfExists('records');
    }
};
