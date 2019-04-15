<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('quem_somos', function () {
    return view('who_are_we');
})->name('who_are_we');

Route::get('missao', function () {
    return view('mission');
})->name('mission');

Route::get('objectivos', function () {
    return view('objectives');
})->name('objectives');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('feed', function () {
    return view('vost_feed');
})->name('vost_feed');

Route::get('contacto', function () {
    return view('contact');
})->name('contact');

Route::get('media', function () {
    return view('media');
})->name('media');

Route::get('privacidade', function () {
    return view('privacy_policy');
})->name('privacy_policy');
