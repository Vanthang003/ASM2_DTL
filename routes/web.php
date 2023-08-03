<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NumberController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('categories')->group(function() {
    // Gọi controller hiển thị ds chuyên mục
    Route::get('/', [CategoriesController::class, 'index']);
    //hiển thị form add dữ liệu
    Route:: get('add', [CategoriesController::class,'addCategory'])->name('categories.add');
    // Nhận dữ liệu từ form addCategories để xử lý
    Route::post('add', [CategoriesController::class,'handleAddcategory'])->name('categories.add');
    });
//admin router
Route::prefix('admin')->group(function() {
    Route::get('/',[DashboardController::class, 'index']);
    // Gọi controller hiển thị ds chuyên mục
    Route::get('product', [ProductController::class, 'index']);
    });

Route::get('/',[HomeController::class, 'index']) ->name('home');

Route::get('number',[NumberController::class, 'index']);
