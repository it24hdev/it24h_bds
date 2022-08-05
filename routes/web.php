<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('setLocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
      Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('app.setLocale');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/danh-sach-bai-dang', [HomeController::class, 'property_list']);
