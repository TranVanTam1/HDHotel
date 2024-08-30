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
    Schema::create('rooms', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('RoomNumber')->unique();   // Trường RoomNumber, đảm bảo mỗi phòng có một số phòng duy nhất
        $table->unsignedBigInteger('RoomTypeID'); // Trường RoomTypeID kiểu số nguyên không âm, là khóa ngoại
        $table->decimal('RoomPrice', 10, 2);       // Trường RoomPrice kiểu số thập phân với 10 chữ số, 2 chữ số thập phân
        $table->string('Status');                 // Trường Status kiểu chuỗi, có thể chứa các trạng thái khác nhau
        $table->integer('Capacity');               // Trường Capacity kiểu số nguyên, để lưu số người tối đa
        $table->text('Description')->nullable();   // Trường Description kiểu văn bản, có thể để trống
        $table->string('image')->nullable();       // Thêm trường hình ảnh, cho phép null
        $table->timestamps();

        // Định nghĩa khóa ngoại
        $table->foreign('RoomTypeID')
              ->references('id')
              ->on('roomtypes')
              ->onDelete('cascade'); // Xóa các phòng khi loại phòng bị xóa
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
