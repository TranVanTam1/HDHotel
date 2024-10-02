<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Customer; 
use App\Models\Rooms; 
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Hiển thị danh sách đặt phòng
    public function index()
    {
        $bookings = Booking::all(); // Lấy tất cả các bản ghi
        return view('admin.bookings.index', compact('bookings'));
    }

    // Hiển thị form thêm mới đặt phòng
    public function create()
    {
        $customers = Customer::all(); // Lấy danh sách khách hàng
        $rooms = Rooms::all(); // Lấy danh sách phòng
        return view('admin.bookings.create', compact('customers', 'rooms'));
    }

    // Lưu thông tin đặt phòng mới
    public function store(Request $request)
    {
        $request->validate([
            'CustomerID' => 'required',
            'RoomID' => 'required',
            'BookingDate' => 'required|date',
            'CheckInDate' => 'required|date',
            'CheckOutDate' => 'required|date',
            'TotalAmount' => 'required|numeric',
            'BookingStatus' => 'required|string',
        ]);

        Booking::create($request->all());
        return redirect()->route('bookings.index')->with('success', 'Đặt phòng thành công!');
    }

    // Hiển thị form chỉnh sửa đặt phòng
    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $customers = Customer::all();
        $rooms = Room::all();
        return view('admin.bookings.edit', compact('booking', 'customers', 'rooms'));
    }

    // Cập nhật thông tin đặt phòng
    public function update(Request $request, $id)
    {
        $request->validate([
            'CustomerID' => 'required',
            'RoomID' => 'required',
            'BookingDate' => 'required|date',
            'CheckInDate' => 'required|date',
            'CheckOutDate' => 'required|date',
            'TotalAmount' => 'required|numeric',
            'BookingStatus' => 'required|string',
        ]);

        $booking = Booking::findOrFail($id);
        $booking->update($request->all());
        return redirect()->route('bookings.index')->with('success', 'Cập nhật đặt phòng thành công!');
    }

    // Xóa thông tin đặt phòng
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Xóa đặt phòng thành công!');
    }
}
