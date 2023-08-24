<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Đảm bảo trả về true để cho phép xác thực form
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|string|max:255|min:8|regex:/^[a-zA-Z0-9_]/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:32|confirmed|regex:/^(?=.*[A-Z])(?=.*\d).+$/',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'username' => 'Tên đăng nhập',
            'email' => 'Email',
            'password' => 'Mật khẩu',
        ];
    }

    /**
     * Get custom validation messages.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'username.min' => 'Vui lòng nhập cả họ và tên của bạn',
            'username.regex' => 'Tên của bạn không hợp lệ vui lòng không nhập ký tự đặc biệt',
            'required' => ':attribute không được để trống',
            'email.unique' => 'Email đã tồn tại trong hệ thống',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự và nhiều nhất là 32 ký tự, 1 chữ viết in hoa và ít nhất có 1 số',
            'password.max' => 'Mật khẩu phải có ít nhất 6 ký tự và nhiều nhất là 32 ký tự, 1 chữ viết in hoa và ít nhất có 1 số',
            'password.regex' => 'Mật khẩu phải có ít nhất 6 ký tự và nhiều nhất là 32 ký tự, 1 chữ viết in hoa và ít nhất có 1 số'
            // Các thông báo lỗi khác
        ];
    }
}
