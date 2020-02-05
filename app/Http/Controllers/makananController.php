<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\makanan;
use Auth;
use Session;
use File;

class makananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makanan = makanan::all();
        return view('makanan.index', compact('makanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $makanan = makanan::all();
        return view('makanan.create', compact('makanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_makanan' => 'required|unique:makanans',
            'harga_makanan' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'deskripsi' => 'required|min:20',
        ]);
        $makanan = new makanan();
        $makanan->nama_makanan = $request->nama_makanan;
        $makanan->harga_makanan = $request->harga_makanan;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/makanan';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $makanan->foto = $filename;
        }
        $makanan->deskripsi = $request->deskripsi;
        $makanan->save();
        return redirect()->route('makanan.index');
        //foto
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $makanan = makanan::findOrFail($id);
        return view('makanan.edit', compact('makanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_makanan' => 'required|unique:makanans',
            'harga_makanan' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'deskripsi' => 'required|min:20',
        ]);

        $makanan = makanan::findOrFail($id);
        $makanan->nama_makanan = $request->nama_makanan;
        $makanan->harga_makanan = $request->harga_makanan;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/assets/img/makanan';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
        }
        $makanan->foto = $filename;
        $makanan->deskripsi = $request->deskripsi;
        $makanan->save();
        return redirect()->route('makanan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $makanan = makanan::findOrFail($id);
        $makanan = makanan::findOrFail($id);
        $makanan->delete();
        return redirect()->route('makanan.index');
    }
}
