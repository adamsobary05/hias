<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ikan;
use App\makanan;

class FrontendController extends Controller
{

    public function show()
    {
        $ikan = ikan::all();

        return view('welcome', compact('ikan'));
    }

    public function laut()
    {
        $ikan = ikan::all();

        return view('welcome', compact('ikan'));
    }

    public function lihat()
    {
        $makanan = makanan::all();
        return view('makan', compact('makanan'));
    }
}
