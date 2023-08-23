<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Login;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {

        return view('loginManagement.login');
    }

    function login(Login $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

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

    function logout(){
        Auth::logout();

        return redirect()->back();
    }


    
    function admin_logout(){
        Auth::logout();

        return redirect('/');
    }
}
