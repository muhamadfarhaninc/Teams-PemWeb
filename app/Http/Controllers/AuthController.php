<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\AuthMail;

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
            if (Auth::user()->email_verified_at != null) {
                if (Auth::user()->role === 'admin') {
                    return redirect('admin')->with('success', 'Halo Admin 👋, Anda Berhasil Login');
                } else if (Auth::user()->role === 'user') {
                    return redirect('user')->with('success', 'Berhasil Login');
                }
            } else {
                Auth::logout();
                return redirect('sesi')->withErrors('Akun anda belum Aktif. Harap Verifikasi terlebih dahulu!')->withInput();
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
        $str = Str::random(100);
        $request->validate(
            [
                'fullname' => 'required|min:5',
                'email' => 'required|unique:users,email|email',
                'password' => 'required|min:6',
                'gambar' => 'required|file|image',
            ],
            [
                'fullname.required' => 'Full Name wajib diisi.',
                'fullname.min' => 'Full Name minimal 5 karakter.',
                'email.required' => 'Email wajib diisi.',
                'email.unique' => 'Email sudah terdaftar.',
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
            'verify_key' => $str
        ];

        User::create($inforegister);

        $details = [
            'name' => $inforegister['name'],
            'role' => 'user',
            'website' => 'KomAkuD3 - kelompok8',
            'datetime' => date('Y-m-d H:i:s'),
            'url' => 'http://' . request()->getHttpHost() . '/' . 'verify/' . $inforegister['verify_key']
        ];

        Mail::to($inforegister['email'])->send(new AuthMail($details));

        return redirect('/sesireg')->with('success', 'Link verifikasi telah dikirim ke email anda. Silahkan Cek email untuk melakukan verifikasi');
    }

    function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();

        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
                ->update([
                    'email_verified_at' => date('Y-m-d H:i:s')
                ]);

            return redirect('/sesi')->with('success', 'Verifikasi berhasil. akun anda sudah Aktif.');
        } else {
            return redirect('/sesi')->withErrors('Keys tidak valid. pastikan telah melakukan register.')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
