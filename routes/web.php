<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\{
    HomeController,
};

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
Route::get('/',[HomeController::class,'index'])->name('frontend.index');
Route::get('about-us',[HomeController::class,'aboutUs'])->name('frontend.about-us');
Route::get('research',[HomeController::class,'research'])->name('frontend.research');
Route::get('services',[HomeController::class,'services'])->name('frontend.services');
Route::get('ask-service',[HomeController::class,'askService'])->name('frontend.ask-service');
Route::get('contact',[HomeController::class,'contact'])->name('frontend.contact');
