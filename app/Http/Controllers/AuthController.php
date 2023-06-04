<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login()
    {
        return view('authenticate.login');
    }
    function register()
    {
        return view('authenticate.register');
    }
}
