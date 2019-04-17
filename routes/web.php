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

Route::get('/', 'WelcomeController@index')->name('home');
Route::get('quem', 'WhoAreWeController@index')->name('who_are_we');
Route::get('missao', 'MissionController@index')->name('mission');
Route::get('objectivos', 'ObjectivesController@index')->name('objectives');
Route::get('blog', 'BlogController@index')->name('blog');
Route::get('feed', 'FeedController@index')->name('vost_feed');
Route::get('contacto', 'ContactController@index')->name('contact');
Route::get('media', 'MediaController@index')->name('media');
Route::get('privacidade', 'PrivacyController@index')->name('privacy_policy');
