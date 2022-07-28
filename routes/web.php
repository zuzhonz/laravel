<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
//     Route::get('/', function () {
//         return view('layout.master');
//     });

//     Route::resource('products', ProductController::class);

//     Route::put('/products/{product}/status', [ProductController::class, 'status'],)
//         ->name('products.status');

//     Route::post('/products/search', [ProductController::class, 'search'],)
//         ->name('products.search');
// });



Route::group(['prefix' => 'home', 'as' => 'home.'], function () {
    Route::get('/index', function () {
        return view('client.web.index');
    })->name('index');

    // trang sản phẩm 
    Route::get('/shop', function () {
        return view('client.web.shop.product');
    })->name('product');

    // chi tiết sản phẩm 
    Route::get('/product/deltail', function () {
        return view('client.web.shop.product_detail');
    })->name('product.deltail');

    // giỏi hàng 
    Route::get('/product/cart', function () {
        return view('client.web.shop.cart');
    })->name('shop.cart');

    // trang bài viết

    Route::get('/blog', function () {
        return view('client.web.blog.blog');
    })->name('blog');

    // chi tiết bài viết
    Route::get('/blog/deltail', function () {
        return view('client.web.blog.blog_detail');
    })->name('blog.deltail');

    // liên hệ 

    Route::get('/contact', function () {
        return view('client.web.contact_us');
    })->name('contact');

    // tài khoản người dùng
    Route::get('/my_account', function () {
        return view('client.web.my_account.my_account');
    })->name('account');

    Route::get('/login', function () {
        return view('client.web.my_account.login');
    })->name('login');
});