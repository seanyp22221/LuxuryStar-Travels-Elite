<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\AuthController;
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

Route::get('/luxmangr/crmauth', [AuthController::class, 'showLogin'])->name('login-show');
Route::post('/luxmangr/crmauth', [AuthController::class, 'doLogin'])->name('login-do');
Route::post('/luxmangr/crmauth/logout', [AuthController::class, 'logOut'])->name('logout-do');

//============================  ADMIN SCREENS   =========================================
Route::get('/luxmangr/admin/dashboard', [AdminController::class, 'adminDashboard'])->name('admin-dashboard-show');
Route::get('/luxmangr/admin/entryform', [AdminController::class, 'entryForm'])->name('admin-entryform-show');
Route::get('/luxmangr/admin/payments', [AdminController::class, 'paymentsForm'])->name('admin-paymentsform-show');
Route::get('/luxmangr/admin/claims', [AdminController::class, 'claims'])->name('admin-claims-show');
Route::get('/luxmangr/admin/messages', [AdminController::class, 'emailCenter'])->name('admin-emailcenter-show');
Route::get('/luxmangr/admin/profile', [AdminController::class, 'editMyProfile'])->name('admin-editmyprofile-show');
Route::get('/luxmangr/admin/reports', [AdminController::class, 'reportsCenter'])->name('admin-reports-show');

Route::get('/redesign',function (){
    return view('redesign');
})->name('redesign');
