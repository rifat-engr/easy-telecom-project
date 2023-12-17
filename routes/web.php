<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;
use App\http\Controllers\HomeController;
use App\http\Controllers\AddMoneyController;
use App\http\Controllers\AboutController;
use App\http\Controllers\MobileRechargeController;
use App\http\Controllers\HistoryController;
use App\http\Controllers\SpecialPackagesController;
use App\http\Controllers\SpecialOfferBuyController;
use App\http\Controllers\LoginController;
use App\http\Controllers\RegistrationController;



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


Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/AddMoney', [AddMoneyController::class, "addMoney"])->name('add_money_form');
Route::get('/About', [AboutController::class, "about"])->name('about_page');
Route::get('/Recharge', [MobileRechargeController::class, "recharge"])->name('mobile_recharge_form');
Route::get('/History', [HistoryController::class, "All_history"])->name('history_page');
Route::get('/Offer', [SpecialPackagesController::class, "special_offer"])->name('special_package_page');
Route::get('/Buying-Offer', [SpecialOfferBuyController::class, "OfferPurchase"])->name('offer_buy_form');
Route::get('/Login', [LoginController::class, "login"])->name('login_page');
Route::get('/Registration', [RegistrationController::class, "registration"])->name('registration_page');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [AdminController::class, "admin"])->name('dashboard');
});
