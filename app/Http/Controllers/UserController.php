<?php

namespace App\Http\Controllers;

use App\Models\DataKad3;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index()
    {
        return view('point_akses.user.user', [
            'toma' => DataKad3::all()->count()
        ]);
    }
}
