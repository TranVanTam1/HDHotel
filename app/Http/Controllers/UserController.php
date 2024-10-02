<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Hiển thị danh sách người dùng
    public function index()
    {
       $users = User::all();
        return view('admin.users.index',compact('users'));
    }
    public function create()
    {
      
        return view('admin.users.create'); // Truyền biến $user đến view
       
    }
         public function store(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
          
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'RoleID' => 'required|in:1,2,3', // Chỉ cho phép các giá trị 1, 2, hoặc 3
        ]);
    
        // Tạo người dùng mới
        User::create([
            
            'email' => $request->email,
            'password' => Hash::make($request->password), // Mã hóa mật khẩu
            'RoleID' => $request->RoleID, // 1, 2, hoặc 3
        ]);
    
        // Chuyển hướng về trang danh sách người dùng với thông báo thành công
        return redirect()->route('users.index')->with('success', 'Thêm người dùng thành công.');
    }
    

    // Hiển thị form chỉnh sửa người dùng
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user')); // Truyền biến $user đến view
    }
    
    // Xử lý cập nhật thông tin người dùng
    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . $id,
            'RoleID' => 'required|in:1,2,3', // Giới hạn vai trò là các số 1, 2, 3
        ]);
    
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->RoleID = $request->RoleID; // Lưu vai trò dưới dạng số
    
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
    
        $user->save();
    
        return redirect()->route('users.index')->with('success', 'Cập nhật người dùng thành công.');
    }
    

    // Xóa người dùng
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'Xóa người dùng thành công.');
    }
}
