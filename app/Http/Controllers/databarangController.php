<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataBarang;
use App\Kategori;

class databarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $databarang = DataBarang::all();
        return view('databarang.index', compact('databarang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $databarang = DataBarang::all();
        $kategori = Kategori::all();
        return view('databarang.create', compact('databarang', 'kategori'));
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
            'nama_ikan' => 'required|unique:data_barangs',
            'id_kategori' => 'required',
            'nama_makanan' => 'required',
            'stok_makanan' => 'required',
            'total_pendapatan' => 'required',
            'total_pengeluaran' => 'required'
        ]);
        $databarang = new databarang();
        $databarang->nama_ikan = $request->nama_ikan;
        $databarang->id_kategori = $request->id_kategori;
        $databarang->nama_makanan = $request->nama_makanan;
        $databarang->stok_makanan = $request->stok_makanan;
        $databarang->total_pendapatan = $request->total_pendapatan;
        $databarang->total_pengeluaran = $request->total_pengeluaran;
        $databarang->save();

        return redirect()->route('databarang.index');
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
        //
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
        //
    }
}
