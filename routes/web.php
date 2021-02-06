<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('home.index');
});

//Route::get('/home', [HomeController::class, 'index']);

//grup halinde middleware uygulanışı  prefix=> ön ad
Route::middleware('auth')->prefix('admin')->group(function (){
    Route::get('/',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');

    Route::get('category',[App\Http\Controllers\Admin\CategoryController::class,'index'])->name('admin_category');
    Route::get('category/add',[App\Http\Controllers\Admin\CategoryController::class,'add'])->name('admin_category_add');
    Route::post('category/create',[App\Http\Controllers\Admin\CategoryController::class,'create'])->name('admin_category_create');
    Route::get('category/edit/{id}',[App\Http\Controllers\Admin\CategoryController::class,'edit'])->name('admin_category_edit');
    Route::post('category/update/{id}',[App\Http\Controllers\Admin\CategoryController::class,'update'])->name('admin_category_update');
    Route::get('category/delete/{id}',[App\Http\Controllers\Admin\CategoryController::class,'destroy'])->name('admin_category_delete');
    Route::get('category/show',[App\Http\Controllers\Admin\CategoryController::class,'show'])->name('admin_category_show');


    #Posting
    Route::prefix('posting')->group(function (){
        Route::get('/',[\App\Http\Controllers\Admin\PostingController::class, 'index'])->name('admin_postings');
        Route::get('create',[App\Http\Controllers\Admin\PostingController::class,'create'])->name('admin_posting_add');
        Route::post('store',[App\Http\Controllers\Admin\PostingController::class,'store'])->name('admin_posting_store');
        Route::get('edit/{id}',[App\Http\Controllers\Admin\PostingController::class,'edit'])->name('admin_posting_edit');
        Route::post('update/{id}',[App\Http\Controllers\Admin\PostingController::class,'update'])->name('admin_posting_update');
        Route::get('delete/{id}',[App\Http\Controllers\Admin\PostingController::class,'destroy'])->name('admin_posting_delete');
        Route::get('show',[App\Http\Controllers\Admin\PostingController::class,'show'])->name('admin_posting_show');


    });

});





 /* **************** LOGİN ************** */
Route::get('/admin/login',[HomeController::class,'login'])->name('adminlogin');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('adminlogincheck');
Route::get('/admin/logout',[HomeController::class,'logout'])->name('adminlogout');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
