<?php

use App\Http\Controllers\KiderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
 Route::fallback(KiderController::class);

Route::get("home",[KiderController::class ,"home"])->name("home");
Route::get("about",[KiderController::class ,"about"])->name("about");
Route::get("classes",[KiderController::class ,"classes"])->name("classes");
Route::get("contact",[KiderController::class ,"contact"])->name("contact");

Route::get("facilities",[KiderController::class ,"facilities"])->name("facilities");
Route::get("team",[KiderController::class ,"team"])->name("team");
Route::get("testmonials",[KiderController::class ,"testmonials"])->name("testmonials");
Route::get("become_a_teacher",[KiderController::class ,"become_a_teacher"])->name("become_a_teacher");
Route::get("appointment",[KiderController::class ,"appointment"])->name("appointment");


Route::post("contact_mail",[KiderController::class ,"contact_mail_send"]);


// Route::get("admin",[AdminController::class ,"index"]);



Route::get('page', function () {
    return view('page');
});



