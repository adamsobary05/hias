<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use cookie;
use App\ikan;

class CartController extends Controller
{
    private function getCarts()
    {
        $carts = json_decode(request()->cookie('dw-carts'), true);
        $carts = $carts != '' ? $carts : [];
        return $carts;
    }

    public function cart()
    {
        $carts = $this->getCarts();
        // dd($carts);
        return view('frontend.cart', compact('carts'));
    }

    public function newcart()
    {
        $carts = $this->getCarts();
        // dd($carts);
        return view('/', compact('carts'));
    }


    public function addToCart(Request $request)
    {
        $this->validate($request, [
            'id_ikan' => 'required|exists:ikans,id',
            'qty' => 'required|integer'
        ]);

        $carts = $this->getCarts();

        if ($carts && array_key_exists($request->id_ikan, $carts)) {
            $carts[$request->id_ikan]['qty'] += $request->qty;
        } else {
            $ikan = ikan::find($request->id_ikan);
            $carts[$request->id_ikan] = [
                'qty' => $request->qty,
                'id_ikan' => $ikan->id,
                'nama_ikan' => $ikan->nama_ikan,
                'jenis_ikan' => $ikan->jenis_ikan,
                'foto' => $ikan->foto,
                'harga_ikan' => $ikan->harga_ikan,
                'keterangan' => $ikan->keterangan
            ];
        }
        $cookie = cookie('dw-carts', json_encode($carts), 60);
        return redirect()->back()->cookie($cookie);
    }

    public function subtotal()
    {
        //MENGAMBIL DATA DARI COOKIE
        $carts = $this->getCarts();

        //UBAH ARRAY MENJADI COLLECTION, KEMUDIAN GUNAKAN METHOD SUM UNTUK MENGHITUNG SUBTOTAL
        $subtotal = collect($carts)->sum(function ($q) {
            return $q['qty'] * $q['harga_ikan']; //SUBTOTAL TERDIRI DARI QTY * PRICE
        });

        //LOAD VIEW CART.BLADE.PHP DAN PASSING DATA CARTS DAN SUBTOTAL
        return response()->json($subtotal);
    }

    // public function listCart()
    // {
    //     $carts = $this->getCarts();
    //     $subtotal = collect($carts)->sum(function ($q) {
    //         return $q['qty'] * $q['harga_ikan'];
    //         return view('cart', compact('carts', 'subtotal'));
    //     });
    // }

    public function updateCart(Request $request)
    {
        $carts = $this->getCarts();

        if ($request->id_ikan) {
            return response()->json('Error : Your Product Not Found, Please Refresh Again or Try Again to AddToCart Your Product', 500);
        }

        foreach ($request->id_ikan as $key => $row) {
            if ($request->qty[$key] == 0) {
                unset($carts[$row]);
            } else {
                $carts[$row]['qty'] = $request->qty[$key];
            }
        }
        $cookie = cookie('dw-carts', json_encode($carts), 1);
        return redirect()->back()->cookie($cookie);
    }

    public function totalproduk()
    {
        $carts = $this->getCarts();
        $total = count($carts);
        return response()->json($total);
    }
}
