<?php

use App\Http\Controllers\Admin\ApartmentController;
use App\Http\Controllers\Guest\SearchController;
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
// rotte guest
Route::get('/', 'Guest\HomeController@index')->name('guest.home');
Route::get('search/', 'Guest\SearchController@search')->name('guest.search');
Route::get('apartment/{apartment}', 'Guest\ApartmentController@showApartment')->name('guest.show');
Route::post('apartment/{apartment}', 'Guest\ApartmentController@addMessage')->name('guest.store');

Auth::routes();

// rotte admin
Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('index');
    
    Route::get('apartments/create', 'ApartmentController@create')->name('create');
    Route::post('/', 'ApartmentController@store')->name('store');
    Route::get('apartments/{apartment}', 'ApartmentController@show')->name('show');
    Route::get('apartments/{apartment}/edit', 'ApartmentController@edit')->name('edit');
    Route::put('{apartment}', 'ApartmentController@update')->name('update');
    Route::delete('{apartment}', 'ApartmentController@destroy')->name('destroy');

});