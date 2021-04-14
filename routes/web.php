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

Route::get('/', function () {
    return view('home');
})->name('home');

require __DIR__.'/auth.php';

Route::get('/cabinet', 'App\Http\Controllers\Cabinet\HomeController@index')->name('cabinet');

Route::prefix('admin')->group(function() {

    Route::middleware('auth')->group(function () {

        Route::namespace('App\Http\Controllers\Admin')->group(function () {

            Route::get('/', 'HomeController@index')->name('admin.home');

            Route::resource('users', 'UserController');

        });
    });
});



