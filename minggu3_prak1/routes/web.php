<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\PScontroller;
use App\Http\Controllers\newscontroller;
use App\Http\Controllers\Saranacontroller;
use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\commentcontroller;


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

Route::get('/', [homecontroller::class, 'index']);

Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', [PScontroller::class, 'mi']);
    Route::get('/teknik-informatika', [PScontroller::class, 'ti']);
});

Route::get('/news/{id}', [newscontroller::class, 'news']);

Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', [Saranacontroller::class, 'kantor']);
    Route::get('/laboratorium', [Saranacontroller::class, 'lab']);
    Route::get('/kelas', [Saranacontroller::class, 'kelas']);
    Route::get('/lainnya', [Saranacontroller::class, 'lain']);
});

Route::get('/about', [aboutcontroller::class, 'about']);

Route::get('/comment/{nama}/{pesan}', [commentcontroller::class, 'comment']);

