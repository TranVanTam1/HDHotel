<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\Position;
use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Hash;
class StaffController extends Controller
{
    public function index() {
        $staff = Staff::with('position')->get(); // Lấy danh sách nhân viên cùng thông tin chức vụ
        return view('admin.staff.index', compact('staff'));
    }
    
    // Hiển thị form thêm nhân viên
    public function create() {
        $positions = Position::all(); // Lấy danh sách chức vụ
        return view('admin.staff.create', compact('positions'));
    }

    // Lưu nhân viên mới
    public function store(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'FullName' => 'required|string|max:255',
            'PositionID' => 'required|exists:positions,id',
            'Phone' => 'nullable|string|max:20',
            'HireDate' => 'nullable|date',
            'Salary' => 'nullable|numeric|min:0',
            'Email' => 'required|email|unique:users,email',
            'Password' => 'required|string|min:6',
        ], [
            'FullName.required' => 'Tên nhân viên là bắt buộc.',
            'Email.required' => 'Email là bắt buộc.',
            'Email.unique' => 'Email đã tồn tại.',
            'Password.required' => 'Mật khẩu là bắt buộc.',
      
        ]);

        // Tạo tài khoản người dùng
        $user = User::create([
            'email' => $request->Email,
            'password' => Hash::make($request->Password),
            'RoleID' => 2,
        ]);

        // Tạo nhân viên
        Staff::create([
            'UserID' => $user->id,
            'FullName' => $request->FullName,
            'PositionID' => $request->PositionID,
            'Phone' => $request->Phone,
            'HireDate' => $request->HireDate,
            'Salary' => $request->Salary,
        ]);

        return redirect()->route('staffs.index')->with('success', 'Thêm nhân viên thành công.');
    }

    // Hiển thị form sửa nhân viên
    public function edit($id)
    {
        $staff = Staff::findOrFail($id);
        $user = User::findOrFail($staff->UserID);
        $positions = Position::all(); // giả sử bạn đã có model Position

        return view('admin.staff.edit', compact('staff', 'user', 'positions'));
    }

    public function update(Request $request, $id)
    {
        // Validate dữ liệu
        $request->validate([
            'FullName' => 'required|string|max:255',
            'PositionID' => 'required|exists:positions,id',
            'Phone' => 'nullable|string|max:20',
            'HireDate' => 'nullable|date',
            'Salary' => 'nullable|numeric|min:0',
            'Email' => 'required|email|unique:users,email,' . $request->UserID,
            'Password' => 'nullable|string|min:6',
        ]);

        $staff = Staff::findOrFail($id);
        $user = User::findOrFail($staff->UserID);

        // Cập nhật thông tin nhân viên
        $staff->update([
            'FullName' => $request->FullName,
            'PositionID' => $request->PositionID,
            'Phone' => $request->Phone,
            'HireDate' => $request->HireDate,
            'Salary' => $request->Salary,
        ]);

        // Cập nhật thông tin người dùng
        $user->update([
            'email' => $request->Email,
            // Chỉ cập nhật password nếu có giá trị
            'password' => $request->Password ? Hash::make($request->Password) : $user->password,
        ]);

        return redirect()->route('staffs.index')->with('success', 'Cập nhật nhân viên thành công.');
    }

    // Xóa nhân viên
    public function destroy($id) {
        Staff::findOrFail($id)->delete();
        return redirect()->route('staffs.index')->with('success', 'Xóa nhân viên thành công.');
    }
}

