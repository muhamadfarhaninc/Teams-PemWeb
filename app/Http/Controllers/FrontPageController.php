<?php

namespace App\Http\Controllers;

use App\Models\FrontPage;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontPageController extends Controller
{
    function index()
    {
        return view('halaman_depan.root', [
            'visi' => FrontPage::where('type', 'visi')->get(),
            'misi' => FrontPage::where('type', 'misi')->get(),
            'tujuan' => FrontPage::where('type', 'tujuan')->get(),
            'rating' => Rating::all()
        ]);
    }
    function rating(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'rating' => 'required'
            ]
        );

        $rate = Rating::create([
            'name' => $request->name,
            'rating' => $request->rating,
            'date' => date('Y-m-d H:i:s'),
            'picture' => 'vesperr-2/assets/img/testimonials/default.jpeg'
        ]);

        if ($rate) {
            Session::flash('success', 'Terima Kasih telah memberikan rating');
            return redirect('/');
        }
        Session::flash('error', 'Terjadi masalah sesuatu, coba kembali.');
        return redirect('/');
    }
}
