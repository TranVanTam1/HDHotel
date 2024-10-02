<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('bookingdetails', function (Blueprint $table) {
        $table->id();
        $table->foreignId('BookingID')->constrained('bookings')->onDelete('cascade');
        $table->integer('NumberOfPeople');
        $table->string('CCCD')->nullable();
        $table->integer('NumberOfNights');
        $table->decimal('RoomRate', 10, 2)->nullable();
        $table->decimal('Discount', 10, 2)->default(0.00);
        $table->decimal('TotalRoomCost', 10, 2)->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('bookingdetails');
}
};
