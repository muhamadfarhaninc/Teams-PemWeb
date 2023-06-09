<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Datakad3Controller extends Controller
{
    function index()
    {
        return view('halaman_datakad3.tables');
    }
}
