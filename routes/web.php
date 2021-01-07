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

//ADMİN
Route::get('/admin',[\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');

/*Route::get('/login', function () {
    return view('admin.login');
});*/ /* **************** LOGİN ************** */
Route::get('/admin/login',[HomeController::class,'login'])->name('adminlogin');
Route::post('/admin/logincheck',[HomeController::class,'logincheck'])->name('adminlogincheck');
//Route::get('/admin/logout',[HomeController::class,'logout'])->name('adminlogout');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
