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

// Route::get('/', function () {
//     return view('backend.home');
// });
Route::group(['namespace'=>'Admin'],function(){
    Route::group(['prefix' => 'login','middleware'=>'CheckLogin'], function () {
        Route::get('/','LoginController@getLogin');
        Route::post('/','LoginController@postLogin')->name('post_login');
        
    });
    Route::get('/','HomeController@logOut')->name('logout');

    Route::group(['prefix' => 'admin','middleware'=>'CheckLogout'], function () {
        Route::get('home','HomeController@getHome')->name('home');

        Route::group(['prefix' => 'user'], function () {
            Route::get('user','UserController@getUser')->name('user');
        });
    });
         
    
});