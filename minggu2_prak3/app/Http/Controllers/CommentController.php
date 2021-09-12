<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
}

Route::get('/posts/{post|/comments/{comment}', function ($postId,$commentId) {
    return "Silahkan berkomentar di website kami";
});