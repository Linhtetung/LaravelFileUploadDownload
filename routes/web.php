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

Route::get('/app_upload','AppUploadController@index');

Route::post('/app_upload/upload','AppUploadController@upload')->name('upload');

Route::get('/view_apps','AppUploadController@show');

Route::get('/download/{appName}','AppUploadController@download');