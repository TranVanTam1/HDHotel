<?php

namespace App\Http\Controllers;
use App\Models\RoomTypes;
use App\Models\Rooms;
use App\Models\Bookings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class PageController extends Controller
{
    //
    public function getPersonalInformation(){
        // Lấy thông tin của người dùng hiện tại đã đăng nhập
        $user = auth()->user(); // Lấy thông tin người dùng đã đăng nhập
  
        // Trả về view và truyền dữ liệu của người dùng
        return view('page.account.personal_information', compact('user'));
    }
    public function update(Request $request)
    {
        // Lấy thông tin user hiện tại
        $user = Auth::user();
        $customer = $user->customer; // Lấy thông tin từ bảng customer
        
        // Validate dữ liệu
        $request->validate([
            'account_last_name' => 'required|string|max:255',
            'account_phone_number' => 'required|numeric',
            'address' => 'required|string|max:255',
        ]);

        // Cập nhật thông tin
        $customer->FullName = $request->input('account_last_name');
        $customer->Phone = $request->input('account_phone_number');
        $customer->Address = $request->input('address');
        $customer->save(); // Lưu thông tin vào bảng customer

        // Redirect lại trang tài khoản với thông báo thành công
        return redirect()->back()->with('success', 'Thông tin cá nhân đã được cập nhật thành công!');
    }

    public function getchangePassword(){
       
        // Trả về view và truyền dữ liệu của người dùng
        return view('page.account.change-pass');
    }
    public function changePassword(Request $request)
    {
        // Validate the input
        $request->validate([
            'password_current' => 'required',
            'password_1' => 'required|string|min:6|different:password_current',
            'password_2' => 'required|same:password_1',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Check if the current password matches the authenticated user's password
        if (!Hash::check($request->password_current, $user->password)) {
            return redirect()->back()->with('message', 'Dổi mật khẩu không thành công.');
        }

        // Change the password
        $user->password = Hash::make($request->password_1);
        $user->save();

        // Redirect with success message
        return redirect()->back()->with('success', 'Mật khẩu đã thay đổi thành công.');
    }
    public function filterByRoomType($roomType)
    {
        // Lấy loại phòng dựa trên tên truyền từ URL
        $roomTypeModel = RoomTypes::where('RoomTypeName', $roomType)->firstOrFail();

        // Trả về view với danh sách các phòng thuộc loại phòng đó
        return view('page.phongsenior', compact( 'roomTypeModel'));
    }
    public function searchAvailableRooms(Request $request)
    {
        $checkIn = $request->input('CheckIn');
        $checkOut = $request->input('CheckOut');

        // Chuyển đổi dữ liệu ngày thành định dạng chuẩn (nếu cần)
        $checkInDate = Carbon::parse($checkIn);
        $checkOutDate = Carbon::parse($checkOut);

        // Lấy danh sách các phòng đã có lịch đặt từ ngày CheckIn đến CheckOut
        $bookedRooms = Bookings::where(function ($query) use ($checkInDate, $checkOutDate) {
            $query->whereBetween('CheckInDate', [$checkInDate, $checkOutDate])
                ->orWhereBetween('CheckOutDate', [$checkInDate, $checkOutDate]);
        })->pluck('RoomID');

        // Lấy danh sách các phòng không có lịch đặt trong khoảng thời gian này
        $availableRooms = Rooms::whereNotIn('id', $bookedRooms)->get();

        return view('page.phongnghi', compact('availableRooms'));
    }
   }
