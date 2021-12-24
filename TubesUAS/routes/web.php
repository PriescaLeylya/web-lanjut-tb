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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/book', 'BookController@index')->name('book');
Route::post('/book/tambah', 'BookController@create');

Route::get('/manage', 'ManageController@manage')->name('manage');

Route::get('/manage/edit/{id}', 'ManageController@edit');

Route::post('/manage/update/{id}', 'ManageController@update');

Route::get('/manage/delete/{id}', 'ManageController@delete');

Route::get('/manage/cetak_pdf', 'ManageController@cetak_pdf');