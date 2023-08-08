<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\{
    Auth\AuthController,
    CRUD\AdminsController,
    CRUD\SliderController,
    CRUD\WhatPresentController,
    CRUD\AboutUsController,
    SettingController,
};


Route::any('login', [AuthController::class, 'login'])->name('admin.login');

Route::middleware('admin')->group(function () {

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [AuthController::class, 'index'])->name('admin.index');

    ////////////////////////// CRUD \\\\\\\\\\\\\\\\\\\\\
    Route::resource('admins', AdminsController::class);


    Route::resource('slider', SliderController::class);
    Route::resource('whatPresent', WhatPresentController::class)->only('index', 'store');
    Route::resource('about-us', AboutUsController::class);

    Route::resource('setting', SettingController::class)->only('index', 'store');
});
