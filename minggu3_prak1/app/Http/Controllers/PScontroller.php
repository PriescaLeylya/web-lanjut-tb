<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PScontroller extends Controller
{
    public function ti(){
        return view ('TI');
    }

    public function mi(){
        return view ('MI');
    }
}
