<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class McController extends Controller
{
    function index()
    {
        $data = User::all();
        return view('halaman_mc.tables', ['mc' => $data]);
    }

    function tambah()
    {
        return view('halaman_mc.tambah');
    }
    function tambahReq(Request $request)
    {
        $request->validate([
            'gambar' => 'image|file|max:1024',
            'nama' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ], [
            'gambar.image' => 'File Wajib Image',
            'gambar.file' => 'Wajib File',
            'gambar.max' => 'Bidang gambar tidak boleh lebih besar dari 1024 kilobyte',
            'nama.required' => 'Nama Wajib Di isi',
            'nama.min' => 'Bidang nama minimal harus 4 karakter.',
            'email.required' => 'Email Wajib Di isi',
            'email.email' => 'Format Email Invalid',
            'password.required' => 'Password Wajib Di isi',
            'password.min' => 'Password minimal harus 6 karakter.',
        ]);

        $gambar_file = $request->file('gambar');
        $foto_ekstensi = $gambar_file->extension();
        $nama_foto = date('ymdhis') . "." . $foto_ekstensi;
        $gambar_file->move(public_path('gambar'), $nama_foto);

        User::insert([
            'gambar' => $nama_foto,
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/mastercontrol')->with('success', 'Berhasil Menambahkan Data');
    }

    function edit($id)
    {
        $data = User::where('id', $id)->get();
        return view('halaman_mc.edit', ['mc' => $data]);
    }
    function editReq(Request $request)
    {
        $request->validate([
            'gambar' => 'image|file|max:1024',
            'nama' => 'required|min:4',
            'email' => 'required|email',
        ], [
            'gambar.image' => 'File Wajib Image',
            'gambar.file' => 'Wajib File',
            'gambar.max' => 'Bidang gambar tidak boleh lebih besar dari 1024 kilobyte',
            'nama.required' => 'Nama Wajib Di isi',
            'nama.min' => 'Bidang nama minimal harus 4 karakter.',
            'email.required' => 'Email Wajib Di isi',
            'email.email' => 'Format Email Invalid',
        ]);

        $gambar_file = $request->file('gambar');
        $foto_ekstensi = $gambar_file->extension();
        $nama_foto = date('ymdhis') . "." . $foto_ekstensi;
        $gambar_file->move(public_path('gambar'), $nama_foto);
        $model = User::find($request->id);
        unset($model->gambar);
        $model->save();

        User::where('id', $request->id)->update([
            'gambar' => $nama_foto,
            'name' => $request->nama,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('/mastercontrol')->with('success', 'Berhasil Mengubah Data');
    }
    function hapus(Request $request)
    {
        User::where('id', $request->id)->delete();

        return redirect('/mastercontrol')->with('success', 'Berhasil Menghapus Data');
    }
}
