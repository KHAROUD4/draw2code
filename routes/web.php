<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::view('/studio', 'pages.studio')->name('studio');
Route::view('/our-process', 'pages.our-process')->name('our-process');
Route::view('/work', 'pages.work')->name('work');
Route::view('/contact', 'pages.contact')->name('contact');

Route::post('/contact/submit', ContactController::class)->name('contact.submit');

// Legacy URL compatibility.
Route::redirect('/index.html', '/');
Route::redirect('/studio.html', '/studio');
Route::redirect('/our-process.html', '/our-process');
Route::redirect('/work.html', '/work');
Route::redirect('/contact.html', '/contact');
