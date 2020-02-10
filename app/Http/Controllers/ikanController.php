<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ikan;
use App\Kategori;
use Auth;
use Session;
use File;

class ikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ikan = ikan::all();
        return view('ikan.index', compact('ikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ikan = ikan::all();
        $kategori = Kategori::all();

        return view('ikan.create', compact('ikan', 'kategori'));
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
            'nama_ikan' => 'required|unique:ikans',
            'id_kategori' => 'required',
            'jenis_ikan' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
            'harga_ikan' => 'required',
            'keterangan' => 'required'
        ]);
        $ikan = new ikan();
        $ikan->nama_ikan = $request->nama_ikan;
        $ikan->id_kategori = $request->id_kategori;
        $ikan->jenis_ikan = $request->jenis_ikan;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_path() . '/img/ikan';
            $filename = str_random(6) . '_'
                . $file->getClientOriginalName();
            $upload = $file->move(
                $path,
                $filename
            );
            $ikan->foto = $filename;
        }
        $ikan->harga_ikan = $request->harga_ikan;
        $ikan->keterangan = $request->keterangan;
        $ikan->save();

        return redirect()->route('ikan.index');
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
        $ikan = ikan::findOrFail($id);
        return view('ikan.edit', compact('ikan'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ikan = ikan::findOrFail($id);
        $ikan = ikan::findOrFail($id);
        $ikan->delete();
        return redirect()->route('ikan.index')->with('notif', 'Data Berhasil Dihapus');
    }
}
