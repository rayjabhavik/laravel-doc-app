<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GetterSetterController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', UserController::class);
Route::get('getname', [GetterSetterController::class, 'getterName'])->name('getname');
Route::get('setname', [GetterSetterController::class, 'setName'])->name('setname');
Route::get('fullname', [GetterSetterController::class, 'fullName'])->name('fullname');



