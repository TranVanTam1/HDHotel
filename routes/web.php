<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\FailedjobController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BookingDetailsController;
use App\Http\Controllers\BookingController;

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

Route::get('/register', function () {
    return view('page.register');
});
Route::get('/admin', [RoomTypeController::class, 'index'])->name('roomTypes.index');

// Hiển thị form thêm chi tiết đặt phòng
Route::get('bookingdetails/create', [BookingDetailsController::class, 'create'])->name('bookingdetails.create');

// Lưu thông tin chi tiết đặt phòng
Route::post('bookingdetails', [BookingDetailsController::class, 'store'])->name('bookingdetails.store');

// Hiển thị danh sách chi tiết đặt phòng
Route::get('bookingdetails', [BookingDetailsController::class, 'index'])->name('bookingdetails.index');

// Hiển thị form chỉnh sửa chi tiết đặt phòng
Route::get('bookingdetails/{id}/edit', [BookingDetailsController::class, 'edit'])->name('bookingdetails.edit');

// Cập nhật chi tiết đặt phòng
Route::put('bookingdetails/{id}', [BookingDetailsController::class, 'update'])->name('bookingdetails.update');

// Xóa chi tiết đặt phòng
Route::delete('bookingdetails/{id}', [BookingDetailsController::class, 'destroy'])->name('bookingdetails.destroy');

// Hiển thị danh sách khách hàng
Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');

// Hiển thị form thêm khách hàng
Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');

// Lưu thông tin khách hàng mới
Route::post('customers', [CustomerController::class, 'store'])->name('customers.store');

// Hiển thị form chỉnh sửa khách hàng
Route::get('customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');

// Cập nhật thông tin khách hàng
Route::put('customers/{id}', [CustomerController::class, 'update'])->name('customers.update');

// Xóa khách hàng
Route::delete('customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');


// Route hiển thị danh sách job bị lỗi
Route::get('failed-jobs', [FailedjobController::class, 'index'])->name('failed_jobs.index');

// Route xóa job bị lỗi
Route::delete('failed-jobs/{id}', [FailedjobController::class, 'destroy'])->name('failed_jobs.destroy');

// Hiển thị danh sách hóa đơn
Route::get('invoices', [InvoiceController::class, 'index'])->name('invoices.index');

// Hiển thị form chỉnh sửa hóa đơn
Route::get('invoices/{id}/edit', [InvoiceController::class, 'edit'])->name('invoices.edit');

// Cập nhật hóa đơn
Route::put('invoices/{id}', [InvoiceController::class, 'update'])->name('invoices.update');

// Xóa hóa đơn
Route::delete('invoices/{id}', [InvoiceController::class, 'destroy'])->name('invoices.destroy');


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

Route::resource('roles', RoleController::class);

Route::resource('rooms', RoomController::class);

Route::resource('users', UserController::class);


Route::resource('positions', PositionController::class);

Route::resource('staffs', StaffController::class);

Route::resource('invoices', InvoiceController::class);

Route::resource('failed_jobs', FailedjobController::class);

Route::resource('bookingdetails', BookingDetailsController::class);

Route::resource('bookings', BookingController::class);



Route::get('gioithieu', function () {
    return view('page.gioithieu');
});

Route::get('dichvu', function () {
    return view('page.dichvu');
});

Route::get('hinhanh', function () {
    return view('page.hinhanh');
});

Route::get('lienhe', function () {
    return view('page.lienhe');
});

Route::get('phongnghi', function () {
    return view('page.phongnghi');
});
Route::get('datphong', function () {
    return view('page.datphong');
});

Route::get('phongconnecting', function () {
    return view('page.phongconnecting');
});

Route::get('phongdeluxe', function () {
    return view('page.phongdeluxe');
});

Route::get('phongsenior', function () {
    return view('page.phongsenior');
});

Route::get('phongtriple', function () {
    return view('page.phongtriple');
});

Route::get('tintuc', function () {
    return view('page.tintuc');
});


Route::get('/phong/{roomType}', [PageController::class, 'filterByRoomType'])->name('rooms.filterByType');
Route::get('/phong', [PageController::class, 'searchAvailableRooms']);



Route::get('/personal-information',[PageController::class,'getPersonalInformation'])->name('getPersonalInformation');
Route::put('/personal-information/update', [PageController::class, 'update'])->name('postUpdatePersonalInformation');

Route::get('/change-password', [PageController::class, 'getchangePassword'])->name('getchangePassword');

Route::put('/change-password/update', [PageController::class, 'changePassword'])->name('postChangePassword');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
// routes/web.php
// Trang đăng ký và xử lý đăng ký
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);



// Xử lý đăng nhập và đăng xuất
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route cho xác thực mã
Route::get('/verify', [AuthController::class, 'showVerificationForm'])->name('verify.code');
Route::post('/verify', [AuthController::class, 'verifyCode'])->name('verify.code');