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

//Route::get('/', function () {
//    return view('index');
//});

Route::get('/', 'MainController@home');
Route::get('/login', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('/gallery/successlogin', 'MainController@successlogin');
Route::get('/logout', 'MainController@logout');

Route::post('/gallery','GalleryController@fileUpload');
Route::delete('/gallery/delete/{id}','GalleryController@destroy');
Route::post('/gallery/edit/{id}','GalleryController@editItem')->name('galleryEdit');
//Route::get('/gallery/delete/{id}','GalleryController@destroy');
