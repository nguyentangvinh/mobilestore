<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MainAdminController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController as ControllersProductController;
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
    return view('welcome');
});

#Login
Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login/store', [LoginController::class, 'store']);

#Middleware Auth
Route::middleware(['auth'])->group(function (){
    
    #Admin
    Route::get('/admin', [MainAdminController::class, 'index'])->name('admin');

    #Menu
    Route::get('/admin/menu/add', [MenuController::class, 'create']);
    Route::post('/admin/menu/add', [MenuController::class, 'store']);
    Route::get('/admin/menu/list', [MenuController::class, 'index']);
    Route::DELETE('/admin/menu/destroy', [MenuController::class, 'destroy']);
    Route::get('/admin/menu/edit/{menu}', [MenuController::class, 'show']);
    Route::post('/admin/menu/edit/{menu}', [MenuController::class, 'update']);

    #Product
    Route::get('/admin/product/add', [ProductController::class, 'create']);
    Route::post('/admin/product/add', [ProductController::class, 'store']);
    Route::get('/admin/product/list', [ProductController::class, 'index']);
    Route::DELETE('/admin/product/destroy', [ProductController::class, 'destroy']);
    Route::get('/admin/product/edit/{product}', [ProductController::class, 'show']);
    Route::post('/admin/product/edit/{product}', [ProductController::class, 'update']);

    #Slider
    Route::get('/admin/slider/add', [SliderController::class, 'create']);
    Route::post('/admin/slider/add', [SliderController::class, 'store']);
    Route::get('/admin/slider/list', [SliderController::class, 'index']);
    Route::DELETE('/admin/slider/destroy', [SliderController::class, 'destroy']);
    Route::get('/admin/slider/edit/{slider}', [SliderController::class, 'show']);
    Route::post('/admin/slider/edit/{slider}', [SliderController::class, 'update']);

    #Upload
    Route::post('/admin/upload/services', [UploadController::class, 'store']);

});

Route::get('/', [MainController::class, 'index']);

Route::get('products/all', [ControllersProductController::class, 'all']);

Route::get('/products/{id}-{slug}', [ControllersProductController::class, 'index']);

Route::get('/products/{id}-{slug}/detail', [ControllersProductController::class, 'show']);

#Search
Route::get('/search', [ControllersProductController::class, 'search']);

#Cart
Route::post('/add-cart', [CartController::class, 'index']);
Route::get('/carts', [CartController::class, 'show']);
Route::get('/list-carts', [CartController::class, 'showlistcart']);
Route::post('/update-carts', [CartController::class, 'update']);
Route::get('/delete-carts/{id}', [CartController::class, 'destroy']);






