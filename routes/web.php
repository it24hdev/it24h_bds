<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('setLocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
      Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('app.setLocale');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/danh-sach-bai-dang', [HomeController::class, 'property_list']);

Route::post('/user-register', [UserController::class, 'register'])->name('user_register');

Route::get('/dang-tin', [HomeController::class, 'create_property']);
