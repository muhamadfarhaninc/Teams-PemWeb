<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    function index()
    {
        return view('halaman_chat.index');
    }
}
