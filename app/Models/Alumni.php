<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    public $table = 'data_alumni';
    public $fillable = [
        'nama',
        'email',
        'nohp',
    ];
}
