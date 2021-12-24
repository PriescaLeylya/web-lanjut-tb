<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';
    protected $primaryKey = 'id';
    protected $fillable = ['nama', 'Tour_id','jenis_kelamin', 'phone_number', 'alamat'];

    public function tourtravels(){
        return $this->belongTo(Toutravel::class,'Tour_id');
    }


}
