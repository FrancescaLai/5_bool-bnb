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



Auth::routes();

// rotte admin
Route::prefix('admin')->name('admin.')->namespace('Admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    // Route::resource('posts', 'PostController');
    // Route::resource('tags', 'TagController');
    // Route::delete('comments/{comment}', 'CommentController@destroy')->name('comments.destroy');
});

//rotte guest