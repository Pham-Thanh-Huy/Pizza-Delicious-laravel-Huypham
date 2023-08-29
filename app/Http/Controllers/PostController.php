<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category_post;

class PostController extends Controller
{
    //view trang danh mục sản phẩm
    function category_post_view()
    {
        // lấy dữ liệu trong danh mục sản phẩm
        $category_post = Category_post::get();

        return view('admin.post.add-category-post', compact('category_post'));
    }
    //controller xử lý thêm danh mục sản phẩm
    function add_category_post(Request $request)
    {
        $request->validate(
            [
                'name_category_post' => 'required|regex:/^[\p{L}0-9-_ ]+$/u', 
                'parent_category_post' => 'required'
            ],
            [
                'required' => ':attribute không được để trống',
                'name_category_post.regex' => 'Ký tự đặc biệt chỉ được dùng gạch ngang hoặc gạch dưới'
            ],
            [
                'name_category_post' => 'Danh mục sản phẩm',
                'parent_category_post' => 'Danh mục cha'
            ]
        );

        // add vào database
        $name_category_post = $request->input('name_category_post');
        $parent_category_post = $request->input('parent_category_post');
        $data = [
            'name' => $name_category_post,
            'parent_id' => $parent_category_post,

        ];
        $add = Category_post::create($data);
        if ($add == true) {
            return redirect()->back()->with('success', __('Thêm danh mục bài viết thành công'));
        } else {
            return redirect()->back()->with('error', __('Thêm danh mục bài viết lỗi, hãy thử lại'));
        };
    }


    function delete_category_post($id)
    {
        $delete =  Category_post::where('id', $id)->delete();
        if ($delete == true)
            return redirect()->back()->with('success', __('Xóa sản phẩm thành công'));
        else return redirect()->back()->with('error', __('xóa sản phẩm lỗi, hãy thử lại'));
    }

    //template sửa danh mục
    function change_category_post_view($id)
    {
        $category_post = Category_post::get();
        $category_post_change = Category_post::find($id);
        if ($category_post_change == null) {
            return redirect()->back();
        }
        return view('admin.post.change-category-post', compact('category_post_change', 'category_post'));
    }

    //controller xử lý việc sửa danh mục
    function change_category_post(Request $request)
    {
        $request->validate(
            [
                'name_category_post' => 'required|regex:/^[\p{L}0-9-_ ]+$/u',
                'parent_category_post' => 'required'
            ],
            [
                'required' => ':attribute không được để trống',
                'name_category_post.regex' => 'Ký tự đặc biệt chỉ được dùng gạch ngang hoặc gạch dưới'
            ],
            [
                'name_category_post' => 'Danh mục sản phẩm',
                'parent_category_post' => 'Danh mục cha'
            ]
        );

        $name_category_post = $request->input('name_category_post');
        $parent_category_post = $request->input('parent_category_post');
        $id = $request->input('id');
        $data = [
            'name' => $name_category_post,
            'parent_id' => $parent_category_post
        ];

        $change = Category_post::find($id)->update($data);

        if ($change) {
            return redirect()->route('admin.view-category-post')->with('success', __('Sửa sản phẩm thành công'));
        } else {
            return redirect()->route('admin.view-category-post')->with('error', __('Sửa sản phẩm lỗi, hãy thử lại'));
        }
    }
}
