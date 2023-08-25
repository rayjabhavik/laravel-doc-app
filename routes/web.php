<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GetterSetterController;
use App\Http\Controllers\YajraController;

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

Route::get('studentyajra', [YajraController::class, 'studentdata'])->name('studentyajra');
// Route::get('/studentdata', [YajraController::class,'studentdata'])->name('studentdata');
Route::view('/create', 'create')->name('create');
Route::post('add', [YajraController::class,'create'])->name('add');
Route::get('update/{id}', [YajraController::class,'update'])->name('update');
Route::PUT('edit/{id}', [YajraController::class,'edit'])->name('edit');

Route::get('delete/{id}', [YajraController::class,'delete'])->name('delete');






