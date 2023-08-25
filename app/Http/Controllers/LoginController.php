<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use App\Http\Requests\Register;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class LoginController extends Controller
{
    public function index_login_view()
    {

        return view('loginManagement.login');
    }

    //check tài khoản người dùng
    public function login(Login $request)
    {
        $credentials = $request->only('email', 'password');

        //kiểm tra tài khoản mật khẩu đã có trong db chưa bằng Auth
        if (Auth::attempt($credentials)) {
            //lấy thông tin người dùng nếu bằng admin thì chuyển hướng tới trang admin còn không trả về trang user
            $user = Auth::user();
            if ($user->user_permission == 'user') {
                return redirect('/');
            } else {
                return redirect('/admin/dashboard');
            }
        } else {
            return back()->withErrors(['check' => 'Email hoặc mật khẩu không đúng']);
        }
    }

    // view trang đăng ký
    public function register_view()
    {
        return view('loginManagement.register');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->back();
    }

    //xử lý trang đăng ký người dùng
    public function register(Register $request)
    {
        $name = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $user_permission = "user";
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            //mã hóa mật khẩu bằng bcrypt
            'user_permission' => $user_permission,
        ];
        if (User::insert($data)) {
            if (Auth::attempt(['email' => $email, 'password' => $password])) {
                return redirect('/');
            }
        }
    }

    // Bắt nhập email xác nhận xem người dùng đã có trong hệ thống chưa
    public function forgotPassword_view()
    {
        return view('loginManagement.forgot-password');
    }

    public function sendMail_forgotPassword(Request $request)
    {
        $request->validate(
            ['email' => 'required|email'],
            [
                'email.required' => 'Không được để trống email',
                'email.email' => 'Định dạng phải là email',
            ]
        );
        // lấy thông tin của người dùng
        $email = $request->input('email');
        $user = User::where('email', '=', $email)->first();

        // nếu không có email trong hệ thống thì sẽ báo là email không tồn tại và không gửi link
        if ($user == null) {
            return redirect()->back()->withErrors(['email' => 'Email không tồn tại trong hệ thống']);
        } else {
            //khi email đã tồn tại thì gửi link để lấy lại mật khẩu
           $status = Password::sendResetLink(
                $request->only('email'),

            );

            return $status === Password::RESET_LINK_SENT ? redirect()->back()->with('status', __('Đường link đã được gửi vào email của bạn. Vui lòng đăng nhập vào email để truy cập vào liên kết đổi mật khẩu.'))
            :  redirect()->back()->with('fail', __('Email chưa được gửi đi vì lỗi. Vui lòng cách 3 phút hãy chọn 1 gmail lấy lại mật khẩu  1 lần'));
        }
    }

    // lấy view sau khi đã có token
    public function reset_view(Request $request)
    {
        $token = $request->token;
        $email = $request->email;

        // Tìm đối tượng User bằng email
        $user = User::where('email', $email)->first();

        // Kiểm tra xem token và email có hợp lệ trong bộ xử lý mật khẩu của Laravel

        if (!$user || !Password::broker()->tokenExists($user, $token)) {
            return redirect('/')->with('fail', __('Token không hợp lệ hoặc hết hạn'));
        }

        return view('loginManagement.password-reset', ['request' => $request]);
    }

    //thay đổi mật khẩu
    public function reset_password(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->password = bcrypt($password);
                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
        ? redirect('/login')->with('status', __('Thay đổi mật khẩu thành công'))
        : redirect()->back()->with('fail', __('Mật khẩu thay đổi không thành công, vui lòng vào lại đường link trên gmail, nếu vẫn không được vui lòng liên hệ với cừa hàng'));
    }

    public function admin_logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
