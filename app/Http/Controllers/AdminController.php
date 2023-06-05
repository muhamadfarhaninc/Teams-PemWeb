<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function index()
    {
        return view('point_akses.admin.admin', [
            'allPeople' => Role::get()->count(),
            'admin' => Role::where('role', 'admin')->count(),
            'user' => Role::where('role', 'user')->count(),
        ]);
    }
    function user()
    {
        $all = DB::table('users')->getCountForPagination();
        return view('point_akses.user.user', ['allPeople' => $all]);
    }
}
