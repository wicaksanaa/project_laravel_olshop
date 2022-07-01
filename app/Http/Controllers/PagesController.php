<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $barangs = Barang::all();
        return view('index', compact('barangs'));
    }

    public function identitas()
    {
        return view('identitas');
    }

}
