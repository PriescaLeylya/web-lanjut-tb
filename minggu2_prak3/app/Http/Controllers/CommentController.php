<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
}

Route::get('/news/1', function () {
    echo('berita pertama');
});

Route::get('/news/2', function () {
    echo('berita kedua');
});

Route::get('/news/3', function () {
    echo('berita ketiga');
});