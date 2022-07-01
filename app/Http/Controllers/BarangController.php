<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\Storage;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->store('post-image');

        $simpan = new Barang;
        
        $simpan->nama = $request->nama;
        $simpan->jenis = $request->jenis;
        $simpan->harga = $request->harga;
        $simpan->jumlah = $request->jumlah;
        $simpan->image = $path;


        //Simpan
        $simpan->save();

        //kembalikan ke halaman students
        return redirect('/barang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        // return $request;
        // die;
        ////Tangkap ID
        $barang = Barang::find($barang->id);

        //Validasi Gambar
        $validatedData = $request->validate([
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg',
        ]);

        if($request->file('image') == "") {
            $barang->update([
                'nama'     => $request->nama,
                'jenis'   => $request->jenis,
                'harga' => $request->harga,
                'jumlah' => $request->jumlah
            ]);
            $path = $request->gambarLama;
        }

        if($request->file('image'))
        {
            if($request->gambarLama)
            {
                Storage::delete($request->gambarLama);
            }
            $path = $request->file('image')->store('post-image');
        }

        //Timpa data lama dengan yang baru ($request = baru, $barang = lama)
        $barang->nama = $request->nama;
        $barang->jenis = $request->jenis;
        $barang->harga = $request->harga;
        $barang->jumlah = $request->jumlah;
        $barang->image = $path;

        //simpan
        $barang->save();
        
        //arahkan ke halaman barangs
        return redirect('/barang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        if($barang->id)
        {
            Storage::delete($barang->image);
        }
        Barang::destroy($barang->id);
        return redirect('/barang')->with('status', 'Data Berhasil dihapus');
    }
}
