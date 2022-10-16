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
        Schema::create('eventday_showtime', function (Blueprint $table) {
            $table->id();
            $table->foreignId('eventdayId')->references('id')->on('event_days')->onDelete('cascade');
            $table->foreignId('showtimesId')->references('id')->on('show_times')->onDelete('cascade');
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
        Schema::dropIfExists('eventday_showtime');
    }
};
