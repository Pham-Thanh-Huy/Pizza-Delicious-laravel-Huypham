<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProductModel;

class PageController extends Controller
{


    function index()
    {
        return view('user.index');
    }

    function blog()
    {
        return view('user.blog.blog');
    }

    function detail_blog()
    {
        return view('user.blog.detail_blog');
    }

    function about()
    {
        return view('user.about');
    }

    function contact()
    {
        return view('user.contact');
    }

    function services()
    {
        return view('user.services');
    }
    //Trang menu hiện danh sách sản phẩm    
    function menu()
    {
        // lấy 4 pizza hàng 1
        $products_pizza_first_4 = ProductModel::where('category_product_id', 2)
            ->take(4)
            ->get();

        //lấy 4 pizza hàng 2
        $products_pizza_next_4 = ProductModel::where('category_product_id', 2)
            ->skip(4)
            ->take(4)
            ->get();

        // lấy 3pizza đặc biệt
        $products_pizza_hot = ProductModel::where('category_product_id', 2)
        ->inRandomOrder()
        ->take(6)
        ->get();
  

        return view('user.menu', compact('products_pizza_first_4', 'products_pizza_next_4', 'products_pizza_hot'));
    }

    function info()
    {
        return view('user.info.info');
    }
}
