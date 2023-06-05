<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Todo;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
        return view('point_akses.admin.admin', [
            'allPeople' => Role::get()->count(),
            'admin' => Role::where('role', 'admin')->count(),
            'user' => Role::where('role', 'user')->count(),
            'list' => Todo::get(),
        ]);
    }
    function user()
    {
        $all = DB::table('users')->getCountForPagination();
        return view('point_akses.user.user');
    }
}
