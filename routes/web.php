<?php

use App\Http\Controllers\KeyboardController;
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

Route::get('keyboard', [KeyboardController::class,'index']);
Route::post('toggle-key', [KeyboardController::class,'toggleKey']);
Route::post('acquire-control', [KeyboardController::class,'acquireControl']);
