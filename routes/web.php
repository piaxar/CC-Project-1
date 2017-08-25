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


Route::get('/c', function () {
    return view('onSuccess');
});
Route::group(['domain' => env('APP_ROOT_DOMAIN')], function ()
{
    Route::get('/', 'SurveyController@show');
    Route::post('/end', 'SurveyController@submitSurveyData');
    Route::get('/change-language', 'LanguageController@changeLanguage');
});

Route::group(['domain' => env('APP_ROOT_DOMAIN'), 'prefix' => 'admin' , 'namespace' => 'Admin'], function ()
{
    Route::get('/', 'AdminController@login');
    Route::get('/home', 'AdminController@showDashBoard');
    Route::get('/stats', 'AdminController@showStats');
    Route::get('/change-language', 'LanguageController@changeLanguage');
    Route::get('/stats/os', 'ChartsController@getOSStats');
    Route::get('/stats/courses', 'ChartsController@getCourseStats');
    Route::get('/stats/programming-languages', 'ChartsController@getLangStats');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
