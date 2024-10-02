<?php

namespace App\Http\Controllers;

use App\Models\BookingDetail; // Import model BookingDetail
use Illuminate\Http\Request;

class BookingDetailsController extends Controller
{
    // Hiển thị danh sách chi tiết đặt phòng
    public function index()
{
    $bookingDetails = BookingDetail::all(); // Lấy tất cả chi tiết đặt phòng
    return view('admin.bookingdetails.index', compact('bookingDetails')); // Truyền biến vào view
}


    // Hiển thị form thêm chi tiết đặt phòng
public function create()
{
    return view('admin.bookingdetails.create');
}

// Lưu thông tin chi tiết đặt phòng mới
public function store(Request $request)
{
    $request->validate([
        'BookingID' => 'required|string|max:255',
        'NumberOfPeople' => 'required|integer',
        'CCCD' => 'required|string|max:20',
        'NumberOfNights' => 'required|integer',
        'RoomRate' => 'required|numeric',
        'Discount' => 'nullable|numeric',
        'TotalRoomCost' => 'required|numeric',
    ]);

    BookingDetail::create($request->all());

    return redirect()->route('bookingdetails.index')->with('success', 'Chi tiết đặt phòng đã được thêm thành công.');
}


    // Hiển thị form chỉnh sửa chi tiết đặt phòng
    public function edit($id)
    {
        $bookingDetail = BookingDetail::findOrFail($id);
        return view('admin.bookingdetails.edit', compact('bookingDetail'));
    }

    // Cập nhật thông tin chi tiết đặt phòng
    public function update(Request $request, $id)
    {
        $request->validate([
            'BookingID' => 'required|string|max:255',
            'NumberOfPeople' => 'required|integer',
            'CCCD' => 'required|string|max:20',
            'NumberOfNights' => 'required|integer',
            'RoomRate' => 'required|numeric',
            'Discount' => 'nullable|numeric',
            'TotalRoomCost' => 'required|numeric',
        ]);

        $bookingDetail = BookingDetail::findOrFail($id);
        $bookingDetail->update($request->all());

        return redirect()->route('bookingdetails.index')->with('success', 'Chi tiết đặt phòng đã được cập nhật thành công.');
    }

    // Xóa chi tiết đặt phòng
    public function destroy($id)
    {
        $bookingDetail = BookingDetail::findOrFail($id);
        $bookingDetail->delete();

        return redirect()->route('bookingdetails.index')->with('success', 'Chi tiết đặt phòng đã được xóa thành công.');
    }
}
