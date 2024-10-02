<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log; // Đảm bảo khai báo này
use App\Mail\VerifyCodeMail;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('page.login');
    }
     // Xử lý đăng nhập
     public function login(Request $request)
     {
         // Xác thực dữ liệu nhập vào
         $request->validate([
             'email' => 'required|email',
             'password' => 'required|min:6',
         ]);
 
         // Thông tin đăng nhập
         $credentials = $request->only('email', 'password');
 
         // Kiểm tra thông tin đăng nhập
         if (Auth::attempt($credentials)) {
             // Đăng nhập thành công, chuyển về trang chính
             return redirect()->intended('/')->with('success', 'Đăng nhập thành công!');
         }
 
         // Đăng nhập thất bại, thêm thông báo lỗi vào session
         return redirect()->back()->withErrors([
             'email' => 'Email hoặc mật khẩu không đúng.',
         ])->withInput();
     }
 
     // Xử lý đăng xuất
     public function logout()
     {
         Auth::logout();
         return redirect('/login')->with('success', 'Đăng xuất thành công!');
     }

     // Hiển thị form đăng ký
    public function showRegistrationForm()
    {
        return view('page.register');
    }

    // Xử lý đăng ký và gửi mã xác thực qua email
    public function register(Request $request)
    {
        // Validate dữ liệu
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password',
        ]);
    
        // Tạo mã xác thực ngẫu nhiên
        $verificationCode = rand(100000, 999999);
        $expiresAt = now()->addMinutes(3); // Thời gian hết hạn là 3 phút
    
        $request->session()->put('register_data', [
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verification_code' => $verificationCode,
            'expires_at' => $expiresAt->toDateTimeString(),
            'FullName' => $request->FullName,
            'Phone' => $request->Phone,
            'Address' => $request->Address,
        ]);
        
    
        // Gửi mã xác thực qua email
        Mail::raw("Mã xác thực của bạn là: $verificationCode", function ($message) use ($request) {
            $message->to($request->email)->subject('Xác thực đăng ký tài khoản');
        });
    
        // Chuyển người dùng đến trang nhập mã xác thực
        return redirect()->route('verify.code', ['email' => $request->email]);
    }
    
    
    public function showVerificationForm(Request $request)
    {
        // Lấy email từ query string hoặc có thể từ session
        $email = $request->query('email');
    
        // Truyền biến email vào view
        return view('page.verify', compact('email'));
    }
    
    
    // Hiển thị form xác thực mã
    public function showVerifyForm($email)
    {
        return view('page.verify', compact('email'));
    }

    // Xử lý xác thực mã
    public function verify(Request $request, $email)
{
    // Validate mã xác thực
    $request->validate([
        'verification_code' => 'required|numeric'
    ]);

    // Lấy dữ liệu đăng ký từ session
    $registerData = $request->session()->get('register_data');

    // Kiểm tra dữ liệu đăng ký và thời gian hết hạn
    if (!$registerData) {
        return back()->withErrors(['verification_code' => 'Dữ liệu đăng ký không tồn tại.']);
    }

    // Kiểm tra thời gian hết hạn
    if (now()->greaterThan($registerData['expires_at'])) {
        $request->session()->forget('register_data');
        return redirect()->route('register.form')->withErrors(['verification_code' => 'Mã xác thực đã hết hạn. Vui lòng đăng ký lại.']);
    }

    // Kiểm tra mã xác thực
    if ($registerData['email'] === $request->email && $registerData['verification_code'] === (int)$request->verification_code) {
        // Lưu tài khoản vào DB với RoleID = 3
        User::create([
            'email' => $registerData['email'],
            'password' => $registerData['password'],
            'RoleID' => 3, // RoleID mặc định là 3
        ]);
        
        // Xóa thông tin đăng ký khỏi session
        $request->session()->forget('register_data');

        return redirect('/login')->with('success', 'Đăng ký thành công. Bạn có thể đăng nhập.');
    }

    // Nếu mã xác thực không đúng, trả về trang nhập mã với lỗi
    return back()->withErrors(['verification_code' => 'Mã xác thực không đúng.']);
}

public function verifyCode(Request $request)
{
    // Xác thực dữ liệu
    $request->validate([
        'verification_code' => 'required|numeric',
        'email' => 'required|email',
    ]);

    // Lấy dữ liệu đăng ký từ session
    $registerData = $request->session()->get('register_data');

    // Kiểm tra nếu dữ liệu đăng ký tồn tại trong session
    if (!$registerData) {
        return back()->withErrors(['verification_code' => 'Dữ liệu đăng ký không tồn tại.']);
    }

    // Kiểm tra mã xác thực
    if ($registerData['email'] === $request->email && $registerData['verification_code'] === (int)$request->verification_code) {
        // Bắt đầu transaction để đảm bảo tính toàn vẹn dữ liệu
        DB::beginTransaction();

        try {
            // Lưu tài khoản vào bảng users
            $user = User::create([
                'email' => $registerData['email'],
                'password' => $registerData['password'],
                'RoleID' => 3, // RoleID mặc định là 3
            ]);

            // Lưu thông tin vào bảng customers
            \App\Models\Customer::create([
                'UserID' => $user->id,
                'FullName' => $registerData['FullName'],
                'Phone' => $registerData['Phone'],
                'Address' => $registerData['Address'],
            ]);

            // Xóa thông tin đăng ký khỏi session
            $request->session()->forget('register_data');

            // Commit transaction sau khi lưu thành công cả hai bảng
            DB::commit();

            return redirect('/login')->with('success', 'Đăng ký thành công. Bạn có thể đăng nhập.');
        } catch (\Exception $e) {
            // Nếu có lỗi, rollback lại transaction
            DB::rollback();
            return back()->withErrors(['verification_code' => 'Có lỗi xảy ra khi lưu thông tin. Vui lòng thử lại.']);
        }
    }

    // Nếu mã xác thực không đúng, trả về trang nhập mã với lỗi
    return back()->withErrors(['verification_code' => 'Mã xác thực không đúng.']);
}

}