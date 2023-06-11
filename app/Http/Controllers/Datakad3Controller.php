<?php

namespace App\Http\Controllers;

use App\Models\DataKad3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Datakad3Controller extends Controller
{
    function index()
    {
        $data = DataKad3::all();
        return view('halaman_datakad3.tables', ['datakad3' => $data]);
    }

    function tambah()
    {
        return view('halaman_datakad3.tambah');
    }
    function tambahReq(Request $request)
    {
        $request->validate([
            'gambar' => 'image|file|max:1024',
            'nama' => 'required|min:4',
            'nim' => 'required|max:8',
            'alamat' => 'required|min:5',
            'telepon' => 'required|max:13',
            'email' => 'required|email',
        ], [
            'gambar.image' => 'File Wajib Image',
            'gambar.file' => 'Wajib File',
            'gambar.max' => 'Bidang gambar tidak boleh lebih besar dari 1024 kilobyte',
            'nama.required' => 'Nama Wajib Di isi',
            'nama.min' => 'Bidang nama minimal harus 4 karakter.',
            'nim.required' => 'Nim Wajib Di isi',
            'nim.max' => 'NIM max 8 Digit',
            'alamat.required' => 'Alamat Wajib Di isi',
            'alamat.min' => 'Alamat Min 5 Huruf',
            'telepon.required' => 'Telepon Wajib Di isi',
            'telepon.max' => 'Telepon Max 13 Angka',
            'email.required' => 'Email Wajib Di isi',
            'email.email' => 'Format Email Invalid',
        ]);

        $gambar_file = $request->file('gambar');
        $foto_ekstensi = $gambar_file->extension();
        $nama_foto = date('ymdhis') . "." . $foto_ekstensi;
        $gambar_file->move(public_path('gambar'), $nama_foto);

        DataKad3::insert([
            'gambar' => $nama_foto,
            'nama' => $request->nama,
            'nim' => $request->nim,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
        ]);

        Session::flash('success', 'Data berhasil ditambahkan');

        return redirect('/datakad3')->with('success', 'Berhasil Menambahkan Data');
    }

    function edit($id)
    {
        $data = DataKad3::where('id', $id)->get();
        return view('halaman_datakad3.edit', ['datakad' => $data]);
    }
    function editReq(Request $request)
    {
        $request->validate([
            'gambar' => 'image|file|max:1024',
            'nama' => 'required|min:4',
            'nim' => 'required|max:8',
            'alamat' => 'required|min:5',
            'telepon' => 'required|max:13',
            'email' => 'required|email',
        ], [
            'gambar.image' => 'File Wajib Image',
            'gambar.file' => 'Wajib File',
            'gambar.max' => 'Bidang gambar tidak boleh lebih besar dari 1024 kilobyte',
            'nama.required' => 'Nama Wajib Di isi',
            'nama.min' => 'Bidang nama minimal harus 4 karakter.',
            'nim.required' => 'Nim Wajib Di isi',
            'nim.max' => 'NIM max 8 Digit',
            'alamat.required' => 'Alamat Wajib Di isi',
            'alamat.min' => 'Alamat Min 5 Huruf',
            'telepon.required' => 'Telepon Wajib Di isi',
            'telepon.max' => 'Telepon Max 13 Angka',
            'email.required' => 'Email Wajib Di isi',
            'email.email' => 'Format Email Invalid',
        ]);

        $dataKad3 = DataKad3::find($request->id);

        if ($request->hasFile('gambar')) {
            $gambar_file = $request->file('gambar');
            $foto_ekstensi = $gambar_file->extension();
            $nama_foto = date('ymdhis') . "." . $foto_ekstensi;
            $gambar_file->move(public_path('gambar'), $nama_foto);
            $dataKad3->gambar = $nama_foto;
        }

        $dataKad3->nama = $request->nama;
        $dataKad3->nim = $request->nim;
        $dataKad3->alamat = $request->alamat;
        $dataKad3->telepon = $request->telepon;
        $dataKad3->email = $request->email;
        $dataKad3->save();

        Session::flash('success', 'Berhasil Mengubah Data');

        return redirect('/datakad3');
    }
    function hapus(Request $request)
    {
        DataKad3::where('id', $request->id)->delete();

        Session::flash('success', 'Berhasil Menghapus Data');

        return redirect('/datakad3');
    }
}
