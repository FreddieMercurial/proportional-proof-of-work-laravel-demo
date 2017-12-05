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

Route::get('/', [

    'as' => 'splash.index',
    'uses' => 'SplashController@index',
]);

Route::group(['middleware' => ['jessie-jensen.ppow:required=true,dynamic=true,baseline=4']], function () {
    Route::get('/ppow', [
        'as' => 'ppow.index',
        'uses' => 'ProtectedController@index',
    ]);
});
