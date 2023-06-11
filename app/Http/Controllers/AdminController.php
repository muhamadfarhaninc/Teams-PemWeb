<?php

namespace App\Http\Controllers;

use App\Models\DataKad3;
use App\Models\Role;
use App\Models\Todo;

class AdminController extends Controller
{
    function index()
    {
        return view('point_akses.admin.admin', [
            'allPeople' => Role::get()->count(),
            'admin' => Role::where('role', 'admin')->count(),
            'user' => Role::where('role', 'user')->count(),
            'list' => Todo::get(),
            'toma' => DataKad3::all()->count(),
        ]);
    }
}
