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
    Schema::create('customers', function (Blueprint $table) {
        $table->id();
        $table->foreignId('UserID')->constrained('users')->onDelete('cascade');
        $table->string('FullName');
        
        $table->string('Phone')->nullable();
        $table->text('Address')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('customers');
}
};
