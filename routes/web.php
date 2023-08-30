<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLogin;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\user\PageController;
use App\Http\Middleware\checklogintoform;
use App\Http\Controllers\PostController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Middleware\checkLoginEmailVerify;
use Illuminate\Support\Facades\Auth;

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
Route::middleware([checkLoginEmailVerify::class])->group(
    function () {
        Route::get('/', [PageController::class, 'index'])->name('home');


        Route::get('blog', [PageController::class, 'blog'])->name('blog');


        Route::get('detail/blog', [PageController::class, 'detail_blog'])->name('detail.blog');


        Route::get('about', [PageController::class, 'about'])->name('about');


        Route::get('contact', [PageController::class, 'contact'])->name('contact');


        Route::get('services', [PageController::class, 'services'])->name('services');

        Route::get('menu', [PageController::class, 'menu'])->name('menu');


        Route::get('info', [PageController::class, 'info'])->name('info');
    }
);


Route::get('login/fail', function () {
    if (Auth::check()) {
        return view('loginManagement.login_fail_email_notverify');
    } else {
        return redirect('/');
    }
});

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

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('admin/logout', [LoginController::class, 'admin_logout'])->name('admin.logout');

//check đường link sau khi người dùng click vào xác thực tài khoản 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    if ($request->user()->hasVerifiedEmail()) {
        return redirect('/')->with('fail', __('Email đã được xác thực'));
    }

    $request->fulfill();
    return redirect('/')->with('success', __('xác thực email thành công'));
})->middleware(['auth', 'signed'])->name('verification.verify');


// -------------------Admin---------------------------
//middleware check admin -user
Route::middleware([CheckLogin::class])->group(function () {

    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // --------product---------

    Route::get('admin/list-product', function () {
        return view('admin.product.list-product');
    })->name('admin.list-product');
    //giao diện thêm sản phẩm
    Route::get('admin/add-product-view', [ProductController::class,'add_product_view'])->name('admin.add-product-view');
    // controller xử lý thêm sản phẩm
    Route::post('admin/add-product', [ProductController::class,'add_product'])->name('admin.add-product');
    // ---Trang giao diện danh mục sản phẩm --------
    Route::get('admin/view-category-product', [ProductController::class, 'category_product_view'])->name('admin.view-category-product');
    // --- Controller xử lý 
    Route::post('admin/add-category-product', [ProductController::class, 'add_category_product'])->name('admin.add-category-product');
    // ----Xóa danh mục sản phẩm
    Route::get('admin/delete-category-product/{id}', [ProductController::class, 'delete_category_product'])->name('admin.delete-category-product');

    // ---- giao diện sửa danh mục sản phẩm
    Route::get('admin/change-category-product-view/{id}', [ProductController::class, 'change_category_product_view'])->name('admin.change-category-product-view');
    // ------- controller xử lý sửa danh mục sản phẩm
    Route::post('admin/change-category-product', [ProductController::class, 'change_category_product'])->name('admin.change-category-product');
    // ------------endProduct-----------

    // -----------Post-------------     
    Route::get('admin/list-post', function () {
        return view('admin.post.list-post');
    })->name('admin.list-post');

    Route::get('admin/add-post-view', [PostController::class, 'add_post_view'] )->name('admin.add-post-view');
    Route::post('admin/add-post', [PostController::class, 'add_post'] )->name('admin.add-post');
    // Controller để dùng ckfinder vào ckeditor
    Route::post('/upload', [PostController::class, 'upload']) -> name('upload.image');


    // ---Trang giao diện danh mục bài viết--------
    Route::get('admin/view-category-post', [PostController::class, 'category_post_view'])->name('admin.view-category-post');
    // --- Controller xử lý 
    Route::post('admin/add-category-post', [PostController::class, 'add_category_post'])->name('admin.add-category-post');
    // ----Xóa danh mục bài viết
    Route::get('admin/delete-category-post/{id}', [PostController::class, 'delete_category_post'])->name('admin.delete-category-post');

    // ---- giao diện sửa danh mục bài viết
    Route::get('admin/change-category-post-view/{id}', [PostController::class, 'change_category_post_view'])->name('admin.change-category-post-view');
    // ------- controller xử lý sửa danh mục bài viết
    Route::post('admin/change-category-post', [PostController::class, 'change_category_post'])->name('admin.change-category-post');
    // ----------endPost----------post

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
