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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => '/docter/{docter}'], function (){
    Route::get('/', 'DocterController@show');
    Route::get('/dashboard', 'DocterController@show');

    Route::group(['prefix' => '/patients/{patient}'], function() {
        Route::get('/', 'PatientController@detail');

        Route::group(['prefix' => '/appointments'], function() {
            Route::get('/create', 'AppointmentControler@create');
            Route::post('/','AppointmentController@store');
            Route::get('/{appointment}/edit', 'AppointmentController@edit');
            Route::patch('/{appointment}', 'AppointmentController@update');
            Route::delete('/{appointment}', 'AppointmetnController@destroy');
        });

        Route::group(['prefix' => '/consults'], function(){
            Route::get('/create', 'ConsultController@create');
            Route::post('/', 'ConsultController@store');
            Route::get('/{consult}/edit', 'ConsultController@edit');
            Route::patch('/{consult}', 'ConsultController@update');
            Route::delete('{consult}', 'ConsultController@destroy');
        });
    });
});

Route::group(['prefix' => '/patient/{patient}'], function(){
    Route::get('/', 'PatientControllter@show');
    Route::get('/dashboard', 'PatientController@show');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
