<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category_product;



class ProductController extends Controller
{
    //view trang danh mục sản phẩm
    function category_product_view()
    {
        // lấy dữ liệu trong danh mục sản phẩm
        $category_product = Category_product::get();

        return view('admin.product.add-category-product', compact('category_product'));
    }
    //controller xử lý thêm danh mục sản phẩm
    function add_category_product(Request $request)
    {
        $request->validate(
            [
                'name_category_product' => 'required|regex:/^[\p{L}0-9-_ ]+$/u',
                'parent_category_product' => 'required'
            ],
            [
                'required' => ':attribute không được để trống',
                'name_category_product.regex' => 'Ký tự đặc biệt chỉ được dùng gạch ngang hoặc gạch dưới'
            ],
            [
                'name_category_product' => 'Danh mục sản phẩm',
                'parent_category_product' => 'Danh mục cha'
            ]
        );

        // add vào database
        $name_category_product = $request->input('name_category_product');
        $parent_category_product = $request->input('parent_category_product');
        $data = [
            'name' => $name_category_product,
            'parent_id' => $parent_category_product,
            'created_at' => now()
        ];
        $add = Category_product::create($data);
        if ($add == true) {
            return redirect()->back()->with('success', __('Thêm sản phẩm thành công'));
        } else {
            return redirect()->back()->with('error', __('Thêm sản phẩm lỗi, hãy thử lại'));
        };
    }


    function delete_category_product($id)
    {
        $delete =  Category_product::where('id', $id)->delete();
        if ($delete == true)
            return redirect()->back()->with('success', __('Xóa sản phẩm thành công'));
        else return redirect()->back()->with('error', __('xóa sản phẩm lỗi, hãy thử lại'));
    }

    //template sửa danh mcuj
    function change_category_product_view($id)
    {
        $category_product = Category_product::get();
        $category_product_change = Category_product::find($id);
        if ($category_product_change == null) {
            return redirect()->back();
        }
        return view('admin.product.change-category-product', compact('category_product_change', 'category_product'));
    }

    //controller xử lý việc sửa danh mục
    function change_category_product(Request $request)
    {
        $request->validate(
            [
                'name_category_product' => 'required|regex:/^[\p{L}0-9-_ ]+$/u',
                'parent_category_product' => 'required'
            ],
            [
                'required' => ':attribute không được để trống',
                'name_category_product.regex' => 'Ký tự đặc biệt chỉ được dùng gạch ngang hoặc gạch dưới'
            ],
            [
                'name_category_product' => 'Danh mục sản phẩm',
                'parent_category_product' => 'Danh mục cha'
            ]
        );

        $name_category_product = $request->input('name_category_product');
        $parent_category_product = $request->input('parent_category_product');
        $id = $request -> input('id');
        $data = [
            'name' => $name_category_product,
            'parent_id' => $parent_category_product
        ];

        $change = Category_product::find($id)->update($data);

        if ($change) {
            return redirect()->route('admin.view-category-product')->with('success', __('Sửa sản phẩm thành công'));
        } else {
            return redirect()->route('admin.view-category-product')->with('error', __('Sửa sản phẩm lỗi, hãy thử lại'));
        }
    }
}
