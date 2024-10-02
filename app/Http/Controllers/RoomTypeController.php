<?php

namespace App\Http\Controllers;
use App\Models\RoomTypes;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    public function index()
    {
        $roomTypes = RoomTypes::all();
        return view('admin.roomTypes.list-room-types', compact('roomTypes'));
    }

    public function create()
    {
        return view('admin.roomTypes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'RoomTypeName' => 'required|string|max:255',
            'Description' => 'nullable|string',
        ]);

        RoomTypes::create([
            'RoomTypeName' => $request->input('RoomTypeName'),
            'Description' => $request->input('Description'),
        ]);

        // Thêm thông báo vào session
        return redirect()->route('roomTypes.index')->with([
            'flag' => 'alert-success', 
            'message' => 'Loại phòng đã được thêm thành công!'
        ]);
    }

    public function edit($id)
    {
        $roomType = RoomTypes::findOrFail($id);
        return view('admin.roomTypes.edit', compact('roomType'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'RoomTypeName' => 'required|string|max:255',
            'Description' => 'nullable|string',
        ]);

        $roomType = RoomTypes::findOrFail($id);
        $roomType->update([
            'RoomTypeName' => $request->input('RoomTypeName'),
            'Description' => $request->input('Description'),
        ]);

        // Thêm thông báo vào session
        return redirect()->route('roomTypes.index')->with([
            'flag' => 'alert-success', 
            'message' => 'Loại phòng đã được cập nhật thành công!'
        ]);
    }

    public function destroy($id)
    {
        $roomType = RoomTypes::findOrFail($id);
        $roomType->delete();

        // Thêm thông báo vào session
        return redirect()->route('roomTypes.index')->with([
            'flag' => 'alert-success', 
            'message' => 'Loại phòng đã được xóa thành công!'
        ]);
    }
    
   
}
