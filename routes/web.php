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
//home page
Route::get('/', 'App\Http\Controllers\SiteController@home')->name('home');
Route::prefix('admin')->group(function () {
    Route::resource('tracks', 'App\Http\Controllers\Admin\TracksController');
    });
