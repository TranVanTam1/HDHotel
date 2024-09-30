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
    Schema::create('bookings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('CustomerID')->constrained('customers')->onDelete('cascade');
        $table->foreignId('RoomID')->constrained('rooms')->onDelete('cascade');
        $table->date('BookingDate');
        $table->date('CheckInDate');
        $table->date('CheckOutDate');
        $table->decimal('TotalAmount', 10, 2)->nullable();
        $table->enum('BookingStatus', ['Confirmed', 'Pending', 'Cancelled'])->default('Pending');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('bookings');
}
};
