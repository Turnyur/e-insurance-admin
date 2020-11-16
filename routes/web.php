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

Route::get('/', function () {
   return redirect('login');
});



Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index']);
    Route::get('/account', [App\Http\Controllers\AdminController::class, 'account']);
    Route::put('/account', [App\Http\Controllers\AdminController::class, 'updatedAccount']);
    Route::get('/user/create', [App\Http\Controllers\AdminController::class, 'createUser']);

});
