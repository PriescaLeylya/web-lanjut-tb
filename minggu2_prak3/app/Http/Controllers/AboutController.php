<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
}

Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', function(){
        return "Manajemen Informatika";
    });
    Route::get('/teknik-informatika', function(){
        return "Teknik Informatika";
    });
   });
 
Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', function(){
        return "Perkantoran";
    });
    Route::get('/laboratorium', function(){
        return "Laboratorium";
    });
    Route::get('/kelas', function(){
        return "Kelas";
    });
    Route::get('/lainnya', function(){
        return "Lainnya";
    });
   });

Route::get('/AboutUS', function () {
    echo('SAMPAI JUMPA KEMBALI <br>PRIESCA LEYLYA SYAFITRI <br> MI 2F <br> 2031710176');
});