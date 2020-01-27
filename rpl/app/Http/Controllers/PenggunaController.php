<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    //

    public function index()
    {
        $pengguna = user::all();
        return view('user.index', compact('pengguna'));
        //
    }

    public function create()
    {
        $pengguna = user::all();
        return view('user.create', compact('pengguna'));
        //
    }

    public function store(Request $request)
    {
        //
        $pengguna = new user;
        $pengguna->name=$request['name'];
        $pengguna->rule=$request['rule'];
        $pengguna->email=$request['email'];
        $pengguna->password=Hash::make($request['password']);
        $pengguna->save();

        return redirect('/user');
    }
}
