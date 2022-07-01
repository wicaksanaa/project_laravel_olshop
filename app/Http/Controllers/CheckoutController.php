<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Checkout $checkout)
    {
        $checkouts = Checkout::all();
        return view('checkout.index', compact('checkouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Barang $barang)
    {
        return view('checkout.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Barang $barang)
    {
        // return $request;
        // die;
        //Buat Baru
        $checkout = new Checkout;
        // $barang_edit = Barang::find($barang->id);

        //Masukan value
        $checkout->nama_penerima = $request->nama_penerima;
        $checkout->nomor = $request->nomor;
        $checkout->alamat = $request->alamat;
        $checkout->pos = $request->pos;
        $checkout->keterangan = $request->keterangan;
        $checkout->gambar_barang = $request->gambar_barang;
        $checkout->harga_barang = $request->harga_barang;
        $checkout->jumlah_beli = $request->jumlah_beli;
        $checkout->nama_barang = $request->nama_barang;

        $checkout->save();

        $request->session()->flash('berhasil_checkout', 'Berhasil Checkout!');

        return redirect('/checkout');
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
