<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function simpan(Request $request)
    {
        //Buat Baru
        $pengguna = new User;

        //Masukan value
        $pengguna->name = $request->name;
        $pengguna->username = $request->username;
        $pengguna->email = $request->email;
        $pengguna->password = Hash::make($request->password);

        $pengguna->save();

        $request->session()->flash('berhasil_regist', 'Berhasil Register!  Silahkan Login');

        return redirect('/login');

    }
}
