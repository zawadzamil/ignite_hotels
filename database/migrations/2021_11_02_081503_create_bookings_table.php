<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table-> string('name');
            $table-> integer('user_id');
            $table-> string('email');
            $table-> string('phone');
            $table-> string('hotel');
            $table-> integer('room_id');
            $table-> string('type');
            $table-> date('check_in');
            $table-> date('check_out');
            $table-> string('cost');
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
        Schema::dropIfExists('bookings');
    }
}
