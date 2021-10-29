<?php

use App\Http\Controllers\Proximity\Auth\RegisterController;
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
})->name('prox-homepage');

Route::get('/login', function () {
    return view('Prøxïmïtÿ.Auth.login');
})->name('prox-login');

Route::get('/register',[RegisterController::class,'index'])->name('prox-register');

Route::post('/on-register',[RegisterController::class,'store'])->name('prox-on-register');
