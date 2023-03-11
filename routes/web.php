<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layout.pay');
});
//view fe
Route::get('home', [LayoutController::class, 'home'])->name('home');
Route::get('about',[LayoutController::class, 'about'])->name('about');
Route::get('contact',[LayoutController::class, 'contact'])->name('contact');
Route::get('detail/{id}',[LayoutController::class,'detail'])->name('detail');
Route::get('/product/{slug}',[LayoutController::class,'category'])->name('category');
Route::get('news',[LayoutController::class,'news'])->name('news');
Route::get('pay',[LayoutController::class,'pay'])->name('pay');


// đăng nhập admin
Route::get('/admin',[LoginController::class,'index'])->name('login');
Route::post('/admin',[LoginController::class,'store'])->name('login.store');

 Route::middleware(['auth'])->group(function(){
 
  Route::get('/admin/home',[AdminController::class,'index'])->name('admin.home');
  Route::resource('admin/home/category', CategoryController::class);
  Route::resource('admin/home/product', ProductController::class);
  Route::resource('admin/home/blog', BlogController::class);
});
//CART
Route::group(['prefix' => 'cart'], function() {

  Route::get('', [CartController::class, 'view'])->name('cart.view');
  Route::get('add/{product}', [CartController::class, 'add'])->name('cart.add');
  Route::get('remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
  Route::get('update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::get('clear', [CartController::class, 'clear'])->name('cart.clear');
});