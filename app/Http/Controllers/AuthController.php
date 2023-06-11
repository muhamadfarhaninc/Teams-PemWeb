<?php

namespace App\Http\Controllers;

use App\Models\User;
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
                return redirect('admin')->with('success', 'Halo Admin 👋, Anda Berhasil Login');
            } else if (Auth::user()->role === 'user') {
                return redirect('user')->with('success', 'Berhasil Login');
            }
        } else {
            return redirect('sesi')->withErrors('Username dan password yang dimasukan tidak sesuai')->withInput();
        }
    }
    function register()
    {
        return view('authenticate.register');
    }

    function registerreq(Request $request)
    {
        $request->validate(
            [
                'fullname' => 'required|min:5',
                'email' => 'required',
                'password' => 'required|min:6',
                'gambar' => 'required|file|image',
            ],
            [
                'fullname.required' => 'Full Name wajib diisi.',
                'fullname.min' => 'Full Name minimal 5 karakter.',
                'email.required' => 'Email wajib diisi.',
                'password.required' => 'Password wajib diisi.',
                'password.min' => 'Password minimal 6 karakter.',
                'gambar.required' => 'Gambar wajib diupload.',
                'gambar.file' => 'Gambar ini Invalid, Coba cari yang lain.',
                'gambar.image' => 'File yang di upload Wajib Image.',
            ],
        );

        $gambar_file = $request->file('gambar');
        $foto_ekstensi = $gambar_file->extension();
        $nama_foto = date('ymdhis') . "." . $foto_ekstensi;
        $gambar_file->move(public_path('gambar'), $nama_foto);

        $inforegister = [
            'name' => $request->fullname,
            'email' => $request->email,
            'password' => $request->password,
            'gambar' => $nama_foto,
        ];

        User::create($inforegister);

        return redirect('/sesi')->with('success', 'Berhasil Register');
    }

    function logout()
    {
        Auth::logout();
        return redirect('/sesi');
    }
}
