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
    Schema::create('invoices', function (Blueprint $table) {
        $table->id();
        $table->foreignId('BookingID')->constrained('bookings')->onDelete('cascade');
        $table->date('InvoiceDate');
        $table->decimal('TotalAmount', 10, 2)->nullable();
        $table->enum('PaymentStatus', ['Paid', 'Unpaid'])->default('Unpaid');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('invoices');
}
};
