<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:6',
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
            'required' => ':attribute không được để trống',
            'email.email' => 'Vui lòng nhập đúng email',
     

            // Các thông báo lỗi khác
        ];
    }
}
