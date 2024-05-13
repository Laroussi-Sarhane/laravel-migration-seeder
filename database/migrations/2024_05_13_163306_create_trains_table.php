<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('station_departures', 50);
            $table->string('station_destination', 50);
            $table->date('departures_time');
            $table->date('arrivals_time');
            $table->string('slug',100)->unique();
            $table->string('train_code', 20);
            $table->tinyInteger('number_of_hangar');
            $table->boolean('at_time')->default(1);
            $table->boolean('delayed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
