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

// Front-end
Route::get('/', function () {
    return view('index');
});

Route::get('/banner', function () {
    return view('banner');
});





// Admin panel
Route::get('/admin', 'AdminController@index');

Route::get('/admin/downloads', 'AdminController@getDownloads');


Route::get('/admin/email/send', function () {
    return view('admin/sendEmail');
});

Route::post('/admin/email/send', 'AdminController@sendEmail');








// Ajax
Route::post('/download', 'DownloadController@saveDownloadData');
