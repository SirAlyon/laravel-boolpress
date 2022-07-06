<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
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

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('contact-form', 'MessageController@index')->name('contact.form.index');
Route::post('contact-form', 'MessageController@store');



Auth::routes();

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/', 'HomeController@index')->name('dashboard');

    //Admin Posts
    Route::resource('posts', 'PostController');

    Route::resource('categories', 'CategoryController');
    Route::resource('tags', 'TagController');


    Route::resource('messages', 'MessageController');
    Route::resource('replies', 'ReplyController');


});

Route::get("{any?}", function(){
    return view('guest.home');
})->where('any' , '.*');




