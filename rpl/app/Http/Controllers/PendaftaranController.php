<?php

namespace App\Http\Controllers;

use App\user;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = user::where('rule', ['Orangtua'])->where('verifikasi', ['Menunggu'])->get();
        return view('pendaftaran.index', compact('pendaftaran')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pendaftaran = user::all();
        return view('pendaftaran.create', compact('pendaftaran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftaran $pendaftaran)
    {
        //
    }
    
     public function verified ($id) {
         $verifikasi = user::find($id);
         $verifikasi->verifikasi='diterima';
         $verifikasi->save();
         return redirect('/pendaftaran')->with('daftar', 'Siswa Telah Diterima');
     }

     public function detail($id)
    {
        $detail = user::find($id);

        return view('siswa.detail', compact('detail'));

    }
}
