<?php

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

Route::get('/', function () {return view('user.main');});

Route::get('/savings_accounts', function () {return view('user.savings_accounts');});

Route::get('/cimb_readreview', 'App\Http\Controllers\UserController@readReview');

Route::get('/cimb_writereview', function () {return view('user.cimb_writereview');})->middleware('user');
Route::post('/create', 'App\Http\Controllers\UserController@createReview');

Route::get('/cimb_editreview/{id}', 'App\Http\Controllers\UserController@editReview')->middleware('user');
Route::post('/update', 'App\Http\Controllers\UserController@updateReview')->middleware('user');

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/savingsaccounts', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/admin', 'App\Http\Controllers\AdminController@readReview')->name('admin')->middleware('admin');
Route::get('/user', 'App\Http\Controllers\UserController@index')->name('user')->middleware('user');


Route::get('/delete/{id}', 'App\Http\Controllers\AdminController@deleteReview')->middleware('admin');


// Route::get('/delete/{id}', 'App\Http\Controllers\UserController@deleteReview')->middleware('user');
// Route::delete('/delete/{id}', 'ReviewController@Destroy');

// Route::get('/', 'App\Http\Controllers\HomeController@index');