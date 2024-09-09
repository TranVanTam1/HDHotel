<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('page.index');
});
Route::get('/admin', [RoomTypeController::class, 'index'])->name('roomTypes.index');

Route::get('/admin/list-room-types', [RoomTypeController::class, 'index'])->name('roomTypes.index');

// Route for showing the create form
Route::get('/admin/room-types/create', [RoomTypeController::class, 'create'])->name('roomtypes.create');

// Route hiển thị form để thêm mới loại phòng
Route::get('/room-types/create', [RoomTypeController::class, 'create'])->name('roomTypes.create');

// Route xử lý việc lưu loại phòng mới
Route::post('/room-types', [RoomTypeController::class, 'store'])->name('roomTypes.store');

// Route hiển thị form để chỉnh sửa loại phòng
Route::get('/room-types/{id}/edit', [RoomTypeController::class, 'edit'])->name('roomTypes.edit');

Route::put('room-types/{id}', [RoomTypeController::class, 'update'])->name('roomTypes.update');

// Route xử lý việc xóa loại phòng
Route::delete('/room-types/{id}', [RoomTypeController::class, 'destroy'])->name('roomTypes.destroy');



Route::resource('rooms', RoomController::class);
