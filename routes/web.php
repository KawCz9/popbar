<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Bookingtables;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
})->name('backlogin');


Route::get('/adminhome',[HomeController::class,'adminhome'])->name('admin.home')->middleware('is_admin');
Route::get('/userhome',[HomeController::class,'userhome'])->name('user.home');

Route::get('/booking{id}',[BookingController::class,'booking'])->name('booking');
Route::post('/booking_active',[BookingController::class,'booking_active']);

Route::get('/reset',[UserController::class,'resetpass']);
Route::get('/profile',[UserController::class,'profile'])->name('profile');
Route::post('/updateprofile',[UserController::class,'updateprofile']);

Route::get('/addBookingAdmin',[BookingController::class,'addbookingadmin']);
Route::get('/addBookingAdminForm{id}',[BookingController::class,'booking_admin']);
Route::post('/addbookingadmin_action',[BookingController::class,'addbookingadmin_action']);
Route::get('/showUserAdmin',[UserController::class,'showuser']);
Route::get('/edit_userdata_admin{id}',[UserController::class,'edituserdata']);
Route::post('/edituserdata_action_admin',[UserController::class,'edituserdata_action']);
Route::get('/remove_userdata_admin{id}',[UserController::class,'removeuserdata']);
Route::get('/add_user_admin',[UserController::class,'adduserdata']);
Route::post('/adduserdata_action',[UserController::class,'adduserdata_action']);
Route::get('/edit_booking_admin{id}',[BookingController::class,'editbookingadmin']);
Route::post('/editbookingadmin_action',[BookingController::class,'editbookingadmin_action']);
Route::get('/remove_booking_admin{id}',[BookingController::class,'removebookingadmin']);
Auth::routes();
Route::get('/home',[HomeController::class,'home'])->name('home');
