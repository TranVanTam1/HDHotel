<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Rooms;
use App\Models\RoomTypes;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class RoomController extends Controller
{
     // Hiển thị danh sách phòng
     public function index()
     {
         $rooms = Rooms::all();
         return view('admin.rooms.index', compact('rooms'));
     }
 
    

public function create()
{
    // Lấy danh sách các loại phòng từ bảng RoomTypes
    $roomTypes = RoomTypes::all();
    
    // Truyền dữ liệu loại phòng sang view
    return view('admin.rooms.create', compact('roomTypes'));
}

public function edit($id)
{
    $room = Rooms::find($id);
    $roomTypes = RoomTypes::all();

    return view('admin.rooms.edit', compact('room', 'roomTypes'));
}

 
public function store(Request $request)
{
    $room = new Rooms();
 // Không cần phải tạo Validator thủ công, Laravel đã thực hiện điều này cho bạn
 if ($request->hasFile('image')) {
    $file = $request->file('image');
    $name = $file->getClientOriginalName();
    $destinationPath = public_path('/images/room');
    $file->move($destinationPath, $name);
} else {
    // Nếu không có tệp được tải lên, có thể xử lý theo ý của bạn, ví dụ:
    $name = null; // hoặc một giá trị mặc định khác
}
    // Xử lý các trường khác
    $room->RoomNumber = $request->RoomNumber;
    $room->RoomTypeID = $request->RoomTypeID;
    $room->RoomPrice = $request->RoomPrice;
    $room->Status = $request->Status;
    $room->Capacity = $request->Capacity;
    $room->Description = $request->Description;
    $room->image = $name;
   
    $room->save();
// Thêm thông báo cập nhật thành công
session()->flash('flag', 'alert-success');
session()->flash('message', 'Phòng đã được thêm thành công!');
    return redirect()->route('rooms.index');
}

 
    
 
public function update(Request $request, $id)
{
    $room = Rooms::find($id);

    // Xử lý các trường khác
    $room->RoomNumber = $request->RoomNumber;
    $room->RoomTypeID = $request->RoomTypeID;
    $room->RoomPrice = $request->RoomPrice;
    $room->Status = $request->Status;
    $room->Capacity = $request->Capacity;
    $room->Description = $request->Description;

    // Xử lý upload hình ảnh mới (nếu có)
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename =$file->getClientOriginalName();
        $path = $file->storeAs('public/images/rooms', $filename);
        $room->image = $filename;
    }

    $room->save();

     // Thêm thông báo cập nhật thành công
     session()->flash('flag', 'alert-success');
     session()->flash('message', 'Phòng đã được cập nhật thành công!');

     return redirect()->route('rooms.index');
}


public function destroy($id)
{
    // Tìm phòng theo ID
    $room = Rooms::find($id);

    // Kiểm tra xem phòng có tồn tại không
    if (!$room) {
        return redirect()->route('rooms.index')->with('error', 'Không tìm thấy phòng.');
    }

    // Lấy đường dẫn tới file ảnh
    $imagePath = public_path('images/room/' . $room->image);

    // Kiểm tra xem file ảnh có tồn tại không
    if (File::exists($imagePath)) {
        File::delete($imagePath);
    }
    
    // Xóa phòng
    $room->delete();

    // Thêm thông báo xóa thành công
    session()->flash('flag', 'alert-success');
    session()->flash('message', 'Phòng đã được xóa thành công!');
    
    return redirect()->route('rooms.index');
}
}


