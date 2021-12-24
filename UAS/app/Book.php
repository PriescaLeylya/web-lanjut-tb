<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'booking';
    protected $fillable = ['nama', 'email', 'ttl', 'notelp', 'alamat', 'paket', 'image', 'status'];
}
