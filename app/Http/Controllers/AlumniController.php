<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AlumniController extends Controller
{
    function index()
    {
        $data = Alumni::all();
        return view('halaman_alumni.tables', ['alumni' => $data]);
    }

    function tambah()
    {
        return view('halaman_alumni.tambah');
    }
    function tambahReq(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'email' => 'required|email',
            'nohp' => 'required|max:13',
        ], [
            'nama.required' => 'Nama Wajib Di isi',
            'nama.min' => 'Bidang nama minimal harus 4 karakter.',
            'nohp.required' => 'Telepon Wajib Di isi',
            'nohp.min' => 'Telepon Min 11 Angka',
            'nohp.max' => 'Telepon Max 13 Angka',
            'email.required' => 'Email Wajib Di isi',
            'email.email' => 'Format Email Invalid',
        ]);

        Alumni::insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'nohp' => $request->nohp,
        ]);

        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/alumni')->with('success', 'Berhasil Menambahkan Data');
    }

    function edit($id)
    {
        $data = alumni::where('id', $id)->get();
        return view('halaman_alumni.edit', ['alumni' => $data]);
    }
    function editReq(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'email' => 'required|email',
            'nohp' => 'required|min:11|max:13',
        ], [
            'nama.required' => 'Nama Wajib Di isi',
            'nama.min' => 'Bidang nama minimal harus 4 karakter.',
            'nohp.required' => 'Telepon Wajib Di isi',
            'nohp.min' => 'Telepon Min 11 Angka',
            'nohp.max' => 'Telepon Max 13 Angka',
            'email.required' => 'Email Wajib Di isi',
            'email.email' => 'Format Email Invalid',
        ]);

        $alumni = Alumni::find($request->id);

        $alumni->nama = $request->nama;
        $alumni->nohp = $request->nohp;
        $alumni->email = $request->email;
        $alumni->save();

        Session::flash('success', 'Berhasil Mengubah Data');

        return redirect('/alumni');
    }
    function hapus(Request $request)
    {
        Alumni::where('id', $request->id)->delete();

        Session::flash('success', 'Berhasil Menghapus Data');

        return redirect('/alumni');
    }
}
