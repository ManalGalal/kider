<?php

use App\Http\Controllers\KiderController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\TestmonialController;
use App\Http\Controllers\UserController;


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

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::get('/admin/login',[AuthController::class, 'getLogin'])->name('getLogin');
Route::post('/admin/login',[AuthController::class, 'postLogin'])->name('postLogin');
//Route::get('/admin/index',[AdminController::class, 'index'])->name('index');
Route::get('/admin/dashboard',[AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/testmonials',[TestmonialController::class, 'index'])->name('testmonials');
Route::get('/admin/addTestmonial',[TestmonialController::class, 'create'])->name('addTestmonial');
Route::post('/admin/editTestmonial',[TestmonialController::class, 'edit'])->name('editTestmonial');
Route::get('/admin/addUser',[UserController::class, 'create'])->name('addUser');
Route::post('/admin/storeUser',[UserController::class, 'store'])->name('storeUser');


Route::post('/admin/storeTestmonial',[TestmonialController::class, 'store'])->name('storeTestmonial');




//Route::fallback(KiderController::class);addUser

//Route::get("admin",[AdminController::class ,"index"]);//->name("admin");

