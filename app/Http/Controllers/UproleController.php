<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UproleController extends Controller
{
    function index($id)
    {
        $data = User::find($id);
        $data->role = 'admin';
        $data->save();
        return redirect('/mastercontrol')->with('success', 'Berhasil Mengubah Role.');
    }
}
