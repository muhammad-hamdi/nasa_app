<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('notifications', 'Api\NotificationController@index')->name('api.notifications');
Route::middleware('auth:api')
    ->get('notifications-paginate', 'Api\NotificationController@paginate')
    ->name('api.notifications.paginate');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Auth\RegisterController@register')->name('users.register');
Route::post('login', 'Auth\LoginController@login')->name('users.login');

Route::middleware('auth:api')->group(function() {
    Route::resource('disasters', 'DisasterController')->only('index', 'show');
    Route::get('disasters/{disaster}/tutorials', 'TutorialController@index')->name('disaster.tutorials.index');
    Route::post('disasters/{disaster}/tutorials', 'TutorialController@store')->name('disaster.tutorials.store');
    Route::get('tutorials/{tutorial}', 'TutorialController@update')->name('tutorials.update');
    Route::put('tutorials/{tutorial}', 'TutorialController@show')->name('tutorials.show');
    Route::delete('tutorials/{tutorial}', 'TutorialController@destroy')->name('tutorials.destroy');
});