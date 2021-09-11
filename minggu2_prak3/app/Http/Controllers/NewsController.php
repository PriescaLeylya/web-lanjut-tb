<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
}

Route::get('/news/{id}', [NewsController::class,'news']);