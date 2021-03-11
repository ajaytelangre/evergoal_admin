<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    return view('login');
});
Route::post('/direct_commision',[HomeController::class,'direct_commision']);
Route::get('/direct_commision',[HomeController::class,'direct_commision_view']);
Route::get('/level_commision',[HomeController::class,'level_commision']);
Route::post('/level_commision',[HomeController::class,'set_level_commision']);
Route::get('/paid_transactions',[HomeController::class,'paid_transactions']);
Route::get('/unpaid_transactions',[HomeController::class,'unpaid_transactions']);
Route::get('/account_list',[HomeController::class,'account_list']);
Route::get('/task_list',[HomeController::class,'task_list']);
Route::get('/downline',[HomeController::class,'downline']);
Route::get('/downline_list/{id}',[HomeController::class,'downline_list']);
Route::get('/transaction_history/{id}',[HomeController::class,'transaction_history']);

Route::get('/users_list',[HomeController::class,'users_list']);
Route::get('/add_user',[HomeController::class,'add_user']);
Route::get('/delete_user/{id}',[HomeController::class,'delete_user']);
Route::get('/confirm_delete_user/{id}',[HomeController::class,'confirm_delete_user']);
Route::get('/edit_user/{id}',[HomeController::class,'edit_user']);
Route::post('/update_user',[HomeController::class,'update_user']);
Route::post('/register_user',[HomeController::class,'register_user']);
Route::get('/withdraw_request',[HomeController::class,'withdraw_request']);
Route::get('/confirm_reject/{id}',[HomeController::class,'confirm_reject']);
Route::get('/approve_task/{id}',[HomeController::class,'approve_task']);
Route::get('/reject_task/{id}',[HomeController::class,'reject_task']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
