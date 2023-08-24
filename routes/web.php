<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\user\PageController;
use App\Http\Middleware\checklogintoform;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ----------------User------------------
Route::get('/', [PageController::class, 'index'])->name('home');


Route::get('blog', [PageController::class, 'blog'])->name('blog');


Route::get('detail/blog', [PageController::class, 'detail_blog'])->name('detail.blog');


Route::get('about', [PageController::class, 'about'])->name('about');


Route::get('contact', [PageController::class, 'contact'])->name('contact');


Route::get('services', [PageController::class, 'services'])->name('services');

Route::get('menu', [PageController::class, 'menu'])->name('menu');


Route::get('info', [PageController::class, 'info'])->name('info');


// ------------User&Admin Login--------------
Route::middleware([checklogintoform::class])->group(function () {
    Route::get('login', [LoginController::class, 'index_login_view'])->name('login');
    Route::post('check/login', [LoginController::class, 'login'])->name('check.login');
    Route::get('register', [LoginController::class, 'register_view'])->name('register');
    Route::post('check/register', [LoginController::class, 'register'])->name('register.add');
    //view nhập mail để gửi link lấy lại mật khẩu
    Route::get('forgot/password', [LoginController::class, 'forgotPassword_view'])->name('password.forgot');
    //view xác nhận email đã tồn tại và gửi đường link
    Route::post('forgot/sendmail-forgotpassword',  [LoginController::class, 'sendMail_forgotPassword'])->name('password.sendmail');
    Route::get('reset-password/{token}', [LoginController::class, 'reset_view'])->name('password.reset');
});

Route::post('update-passsword', [LoginController::class, 'reset_password'])->name('password.update');

Route::get('logout', [LoginController::class, 'logout'])->name('menu');
Route::get('admin/logout', [LoginController::class, 'admin_logout'])->name('menu');




// -------------------Admin---------------------------
Route::middleware([CheckLogin::class])->group(function () {

    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // --------product---------

    Route::get('admin/list-product', function () {
        return view('admin.product.list-product');
    })->name('admin.list-product');
    Route::get('admin/add-product', function () {
        return view('admin.product.add-product');
    })->name('admin.add-product');

    Route::get('admin/add-category-product', function () {
        return view('admin.product.add-category-product');
    })->name('admin.add-category-product');
    // ------------endProduct-----------

    // -----------Post-------------
    Route::get('admin/list-post', function () {
        return view('admin.post.list-post');
    })->name('admin.list-post');

    Route::get('admin/add-post', function () {
        return view('admin.post.add-post');
    })->name('admin.add-post');


    Route::get('admin/add-category-post', function () {
        return view('admin.post.add-category-post');
    })->name('admin.add-category-post');


    Route::get('admin/add-category-post', function () {
        return view('admin.post.add-category-post');
    })->name('admin.add-category-post');
    // ----------endPost----------

    // -----------UserManagement && EmployeeManagement----------
    Route::get('admin/employee-management', function () {
        return view('admin.employee&user.employeeManagement');
    })->name('admin.employee-management');

    Route::get('admin/user-management', function () {
        return view('admin.employee&user.userManagement');
    })->name('admin.user-management');
    Route::get('admin/info', function () {
        return view('admin.info/info');
    })->name('admin.info');
});
