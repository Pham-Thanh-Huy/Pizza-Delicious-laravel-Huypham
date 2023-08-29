<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Product extends FormRequest
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
            'product_name' => 'required|regex:/^[\p{L}0-9-_ ]+$/u',
            'product_price' => 'required|numeric',
            'product_description' => 'required',
            'category_product' => 'required|numeric',
            'product_img' => 'required|file|mimes:jpg,jpeg,png,gif'
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
            'product_name' => 'Tên sản phẩm',
            'product_price' => 'Giá tiền',
            'product_description' => 'Mô tả sản phẩm',
            'category_product' => 'Danh mục sản phẩm',
            'product_img' => 'Ảnh sản phẩm',

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

            'product_img.file' => 'Vui lòng nhập kiểu dữ liệu phải là ảnh',
            'product_img.mimes' => 'Vui lòng nhập kiểu dữ liệu phải là ảnh',
            'required' => ':attribute không được để trống',
            'numeric' => ':attribute nhập vào phải là số',
            'regex' => 'Dữ liệu nhập vào chỉ được nhập chữ cái bình thường, số và dấu gạch dưới, gạch ngang',
        ];
    }
}
