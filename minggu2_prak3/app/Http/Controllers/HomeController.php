<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return 'Menampilkan Halaman Awal website <br> Selamat Datang';
    }
}
