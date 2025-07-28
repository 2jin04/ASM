<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminCateController;
use App\Http\Controllers\AdminProController;
use App\Http\Controllers\Auth\SocialAuthController;

use App\Http\Middleware\AdminMiddleware;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

//Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');
//Đăng nhập
Route::get('/login', [UsersController::class, 'login'])->name('login');
Route::post('/login', [UsersController::class, 'login_']);
//Đăng ký
Route::get('/register', [UsersController::class, 'register'])->name('register');
Route::post('/register', [UsersController::class, 'register_']);
//Đăng xuất
Route::get('/exit', [UsersController::class, 'exit']);

// Google OAuth
Route::get('/auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);



Route::get('/profile', [UsersController::class, 'profile']);
Route::group(['prefix' => 'account'], function() {
    Route::get('profile', [UsersController::class,'profile'])->name('profile');
});

//Trang chi tiết sản phẩm
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name('detail');

//Trang danh mục
Route::get('/products/{idCata?}', [HomeController::class, 'showProducts'])->name('products');
Route::post('/savecomment', [HomeController::class,'savecomment']);

//Giỏ hàng
Route::post('/addcart-ajax', [HomeController::class, 'addCartAjax'])->name('addcart.ajax');
Route::get('/addcart/{idpro}/{quantity}', [HomeController::class,'addcart'])->name('addcart');
Route::get('/showcart', [HomeController::class,'showcart'])->name('cart');
// Routes cho cart management
Route::post('/cart/update-quantity', [HomeController::class, 'updateCartQuantity'])->name('cart.update.quantity');
Route::post('/cart/remove-item', [HomeController::class, 'removeFromCart'])->name('cart.remove.item');
Route::get('/deletecart/{idpro}', [HomeController::class,'deletecart']);

//Admin
Route::group(['prefix' => 'admin','middleware' => [AdminMiddleware::class]], function() {
    Route::get('/dashboard', [AdminController::class,'index']);
    Route::get('exit', [AdminController::class, 'exit']);
    Route::resource('cate', AdminCateController::class);
    Route::get('catetrash', [AdminCateController::class,'catetrash']);
    Route::get('catetrash/restore/{id}', [AdminCateController::class,'catetrash_restore']);
    Route::get('catetrash/delete/{id}', [AdminCateController::class,'catetrash_delete']);
    Route::resource('product', AdminProController::class);
    Route::get('protrash', [AdminProController::class,'protrash']);
    Route::get('protrash/restore/{id}', [AdminProController::class,'protrash_restore']);
    Route::get('protrash/delete/{id}', [AdminProController::class,'protrash_delete']);
});

Route::group(['prefix' => 'admin'], function() {
    Route::get('login', [AdminController::class,'login']);
    Route::post('login', [AdminController::class,'login_']);
});

//Thông báo
Route::get('/thongbao', function () {
    return view('thongbao');
});