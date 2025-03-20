<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\{Auth\AuthController,
    CRUD\AboutPageController,
    CRUD\AdminsController,
    CRUD\CounterController,
    CRUD\MetaController,
    CRUD\QuestionController,
    CRUD\ReviewController,
    CRUD\SliderController,
    CRUD\ContactController,
    CRUD\StepController,
    CRUD\WhatPresentController,
    CRUD\AboutUsImagesController,
    CRUD\AboutUsController,
    CRUD\ArticlesController,
    CRUD\ServicesController,
    CRUD\MajorsController,
    CRUD\ServiceTypeController,
    CRUD\Requestsontroller,
    SettingController};


Route::any('login', [AuthController::class, 'login'])->name('admin.login');

Route::middleware('admin')->group(function () {

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/', [AuthController::class, 'index'])->name('admin.index');

    ////////////////////////// CRUD \\\\\\\\\\\\\\\\\\\\\
    Route::resource('admins', AdminsController::class);


    Route::resource('slider', SliderController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('whatPresent', WhatPresentController::class)->only('index', 'store');
    Route::resource('about-us', AboutUsController::class);
    Route::resource('about-us-images', AboutUsImagesController::class);
    Route::resource('articles', ArticlesController::class);
    Route::resource('services', ServicesController::class);
    Route::get('editServicesPosition', [ServicesController::class,'editServicesPosition'])->name('editServicesPosition');
    Route::post('services.reorder', [ServicesController::class,'reorder'])->name('services.reorder');
    Route::resource('majors', MajorsController::class);
    Route::resource('servicesType', ServiceTypeController::class);
    Route::resource('requests', Requestsontroller::class);
    Route::resource('questions', QuestionController::class);
    Route::resource('meta', MetaController::class);
    Route::resource('counters', CounterController::class);
    Route::resource('steps', StepController::class);
    Route::resource('reviews', ReviewController::class);
    Route::resource('aboutPage', AboutPageController::class);

    Route::resource('setting', SettingController::class)->only('index', 'store');
});
