<?php

use Illuminate\Support\Facades\Route;

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
// route per home page
Route::get('/', 'HomeController@home')->name('home-page');

// route per comics page
Route::get('/comics', 'ComicsController@comics')->name('comics-page');

// route per comic details page
Route::get('/comicsDetails/{id}', 'ComicsController@comicsDetails')->name('comics-details-page');

// route per movies page
Route::get('/movies', 'HomeController@movies')->name('movies-page');

// route per tv page
Route::get('/tv', 'HomeController@tv')->name('tv-page');

// route per games page
Route::get('/games', 'HomeController@games')->name('games-page');

// route per collectibles page
Route::get('/collectibles', 'HomeController@collectibles')->name('collectibles-page');

// route per videos page
Route::get('/videos', 'HomeController@videos')->name('videos-page');

// route per fans page
Route::get('/fans', 'HomeController@fans')->name('fans-page');

// route per news page
Route::get('/news', 'HomeController@news')->name('news-page');

// route per shop page
Route::get('/shop', 'HomeController@shop')->name('shop-page');