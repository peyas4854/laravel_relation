<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\AddressController;
use \App\Http\Controllers\PostController;
use \App\Http\Controllers\TagController;
use \App\Http\Controllers\ProjectController;


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
    return view('dashboard');
})->name('/')->middleware('auth');

Route::resource('user', UserController::class);
Route::resource('address', AddressController::class);
Route::resource('post', PostController::class);
Route::resource('tag', TagController::class);
Route::resource('project', ProjectController::class);

require __DIR__ . '/auth.php';
