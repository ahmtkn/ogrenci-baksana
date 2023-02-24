<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login',[App\Http\Controllers\Auth\LoginController::class,'index'])->name('login.index');
Route::post('/login',[App\Http\Controllers\Auth\LoginController::class,'login'])->name('user.login');
Route::middleware(['auth'])->group(function (){
    Route::get('/',[\App\Http\Controllers\HomeController::class,'index'])->name('home');
    Route::get('/coupons',[\App\Http\Controllers\Campaign\CampaignController::class,'coupon'])->name('campaign.coupon.list');
    Route::get('/coupon/export',[\App\Http\Controllers\Coupon\CouponController::class,'export'])->name('coupon.export');
    Route::get('/coupon/import-modal/{id}',[\App\Http\Controllers\Coupon\CouponController::class,'importModal'])->name('coupon.import.modal');
    Route::post('/coupon/import/{id}',[\App\Http\Controllers\Coupon\CouponController::class,'import'])->name('coupon.import');
});
