<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login()
    {
        return view('authenticate.login');
    }
    function loginreq(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi',
            ],
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (Auth::user()->role === 'admin') {
                return redirect('admin');
            } else if (Auth::user()->role === 'user') {
                return redirect('user');
            }
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukan tidak sesuai')->withInput();
        }
    }
    function register()
    {
        return view('authenticate.register');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/sesi');
    }
}
