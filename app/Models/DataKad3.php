<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKad3 extends Model
{
    use HasFactory;
    protected $table = 'data_kad3';
    protected $fillable = [
        'id',
        'gambar',
        'nama',
        'nim',
        'alamat',
        'email',
        'telepon',
    ];
}
