<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEnd\{
    HomeController,
};
use Illuminate\Support\Str;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Facades\Response;

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

Route::middleware('checkUrl')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('frontend.index');
    Route::get('home', [HomeController::class, 'landing'])->name('landing.index');
    Route::get('about-us', [HomeController::class, 'aboutUs'])->name('frontend.about-us');
    Route::get('research', [HomeController::class, 'research'])->name('frontend.research');
    Route::get('services', [HomeController::class, 'services'])->name('frontend.services');
    Route::get('ask-service', [HomeController::class, 'askService'])->name('frontend.ask-service');
    Route::get('contact', [HomeController::class, 'contact'])->name('frontend.contact');
    Route::post('postContact', [HomeController::class, 'postContact'])->name('postContact');
    Route::post('storeRequest', [HomeController::class, 'storeRequest'])->name('store.request');
    Route::get('updateClickNums', [HomeController::class, 'updateClickNums'])->name('updateClickNums');
    Route::get('article/{url_title}', [HomeController::class, 'article'])->name('frontend.article');
    Route::get('services/{url_title}', [HomeController::class, 'service'])->name('frontend.service');
    Route::get('service/{url_title}', [HomeController::class, 'service'])->name('frontend.service');

    ##  privacypolicy
    Route::get('privacy', [HomeController::class,'privacy'])->name('privacy');

    ##  termsConditions
    Route::get('terms-conditions', [HomeController::class,'termsConditions'])->name('termsConditions');

    ##  returnPolicy
    Route::get('return-policy', [HomeController::class,'returnPolicy'])->name('returnPolicy');


    Route::get('/payments/verify/{payment?}',[HomeController::class,'payment_verify'])->name('verify-payment');
    Route::get('test',[HomeController::class,'test']);



    //    Route::get('sitemap.xml', function () {
//        $xmlContent = file_get_contents(public_path('sitemap.xml'));
//
//        return Response::make($xmlContent, 200, [
//            'Content-Type' => 'application/xml',
//        ]);
//    });

    Route::get('/clear/route', function () {
        \Illuminate\Support\Facades\Artisan::call('optimize:clear');
        \Illuminate\Support\Facades\Artisan::call('migrate');
        return 'Optimize Cleared Successfully';
    });
});

