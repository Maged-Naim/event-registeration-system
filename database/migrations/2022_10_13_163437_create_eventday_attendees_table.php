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
        Schema::create('eventday_attendees', function (Blueprint $table) {
            $table->id();
            // $table->integer('eventdaysId')->unsigned();
            // $table->integer('AttendeesId')->unsigned();
            $table->foreignId('eventdaysId')->references('id')->on('event_days')->onDelete('cascade');
            $table->foreignId('AttendeesId')->references('id')->on('attendees')->onDelete('cascade');
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
        Schema::dropIfExists('eventday_attendees');
    }
};
