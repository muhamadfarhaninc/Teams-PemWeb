<?php

namespace App\Http\Controllers;

use App\Models\FrontPage;

class FrontPageController extends Controller
{
    function index()
    {
        return view('halaman_depan.root', [
            'visi' => FrontPage::where('type', 'visi')->get(),
            'misi' => FrontPage::where('type', 'misi')->get(),
            'tujuan' => FrontPage::where('type', 'tujuan')->get(),
        ]);
    }
}
