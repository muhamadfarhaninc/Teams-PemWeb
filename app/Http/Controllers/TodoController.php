<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    function index(Request $request)
    {
        $request->validate(
            [
                'list' => 'required',
            ],
            [
                'list.required' => 'List wajib diisi',
            ],
        );
        $list = [
            'list' => $request->list,
            'status' => '',
        ];
        Todo::create($list);
        return redirect('admin')->with('success', 'Berhasil Menambah Catatan!.');
    }

    function del(Request $request)
    {
        Todo::where('id', $request->id)->delete();

        return redirect('admin')->with('success', 'Berhasil Menghapus Catatan');
    }
}
