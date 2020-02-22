<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ikan;
use App\makanan;

class FrontendController extends Controller
{

    public function show()
    {
        $ikan_tawar = ikan::where('id_kategori', '=', '1')->get();
        $ikan_laut = ikan::where('id_kategori', '=', '2')->get();
        return view('welcome', compact('ikan_tawar', 'ikan_laut'));
    }

    public function lihat()
    {
        $makanan = makanan::all();
        return view('makan', compact('makanan'));
    }

    public function detail($id)
    {
        $ikan_tawar = ikan::findOrFail($id);
        return view('frontend.detail', compact('ikan_tawar'));
    }
}
