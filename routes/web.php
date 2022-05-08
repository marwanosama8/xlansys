<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;







Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        Route::get('/', function () {
            return view('home');
        })->name('home');

        Route::get('company', function () {
            return view('company');
        })->name('company');

        Route::get('crm', function () {
            return view('crm');
        })->name('crm');

        Route::get('hrm', function () {
            return view('hrm');
        })->name('hrm');

        Route::get('erp', function () {
            return view('erp');
        })->name('erp');

        Route::get('mobile', function () {
            return view('mobile');
        })->name('mobile');

        Route::get('contact-us', function () {
            return view('contact-us');
        })->name('contact.us');
        Route::get('blog', function () {
            return view('blog');
        })->name('blog');

    });

Route::post('message', [ContactController::class,'message'])->name('new.message');
