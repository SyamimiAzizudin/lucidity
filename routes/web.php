<?php

Auth::loginUsingId(1);

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
});

Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/credit', 'CreditsController@index');

});

Route::post('credits', function() {

    $file = request()->file('credit');

    $ext = $file->guessClientExtension();

    $file->storeAs('credits/'. auth()->id(), "credit.{$ext}");

    return back();
});

Auth::routes();
