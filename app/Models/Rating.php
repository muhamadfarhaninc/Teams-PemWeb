<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public $timestamps = false;

    use HasFactory;

    public $table = 'rating';

    protected $fillable = ['name', 'rating', 'date', 'picture'];
}
