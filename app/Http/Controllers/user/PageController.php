<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    function menu()
    {
        return view('user.menu');
    }

    function info()
    {
        return view('user.info.info');
    }
}
