<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Post extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

      /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post_name' => 'required|regex:/^[\p{L}0-9-_ ]+$/u',
            'post_price' => 'required|numeric',
            'post_detail' => 'required',
            'category_post' => 'required|numeric',
            'post_img' => 'required|file|mimes:jpg,jpeg,png,gif'
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
            'post_name' => 'Tên bài viết',
            'post_price' => 'Giá tiền',
            'post_detail' => 'Mô tả bài viết',
            'category_post' => 'Danh mục bài viết',
            'post_img' => 'Ảnh bài viết',

        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */

    public function messages()
    {
        return [

            'post_img.file' => 'Vui lòng nhập kiểu dữ liệu phải là ảnh',
            'post_img.mimes' => 'Vui lòng nhập kiểu dữ liệu phải là ảnh',
            'required' => ':attribute không được để trống',
            'numeric' => ':attribute nhập vào phải là số',
            'regex' => 'Dữ liệu nhập vào chỉ được nhập chữ cái bình thường, số và dấu gạch dưới, gạch ngang',
        ];
    }
}
