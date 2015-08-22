<?php

use App\Tweet;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::get('sign-up', 'AuthController@signUp');
Route::post('sign-up', 'AuthController@postSignUp');

Route::get('sign-in', 'AuthController@signIn');
Route::post('sign-in', 'AuthController@postSignIn');

Route::any('logout', 'AuthController@logout');

Route::group(['middleware' => 'auth'], function () {
    Route::get('timeline', 'TimelineController@index');
    Route::get('tweets', 'TweetsController@index');
    Route::post('tweets', 'TweetsController@store');

    Route::get('followers', 'FollowersController@index');

    Route::get('following', 'FollowingController@index');
    Route::post('following', 'FollowingController@store');
    Route::delete('following/{username}', 'FollowingController@destroy');
});
