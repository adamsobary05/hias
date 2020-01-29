<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ikan;

class FrontendController extends Controller
{
    public function show()
    {
        $ikan = ikan::all();

        return view('welcome', compact('ikan'));
    }
}
