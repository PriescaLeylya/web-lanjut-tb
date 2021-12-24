<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tourtravel extends Model
{
    use HasFactory;
    protected $table = 'tourtravels';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'photo','Tujuan','Destinasi', 'Harga'];

    public function pelanggans(){
        return $this->hasMany(Pelanggan::class);
    }
}
