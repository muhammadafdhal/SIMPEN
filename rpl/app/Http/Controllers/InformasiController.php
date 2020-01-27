<?php

namespace App\Http\Controllers;

use App\informasi;
use Illuminate\Http\Request;
use File;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $info = informasi::all();
        return view('informasi.index', compact('info'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $info = informasi::all();
        return view('informasi.create', compact('info'));
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
        $info = new informasi;
        $info->judul=$request['judul'];
        $info->informasi=$request['informasi'];
        $info->status=$request['status'];

        if($berkas1 = $request->file('foto'))
        {
            $namaFile1 = $berkas1->getClientOriginalName();
            $request->file('foto')->move('images/prestasi', $namaFile1);
            $info->foto=$namaFile1;
        }
        else
        {
            $info->foto='yes';
        }

        $info->save();

        return redirect('/informasi')->with('tambah','Data Berhasil Ditambah');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $info = informasi::find($id);
         return view('informasi.edit', compact('info'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $info = informasi::find($id);
        $info->judul=$request['judul'];
        $info->informasi=$request['informasi'];
        $info->status=$request['status'];
        $hps = $info->foto;
        File::delete('images/prestasi'. $hps);
        if($berkas1 = $request->file('foto'))
        {
            $namaFile1 = $berkas1->getClientOriginalName();
            $request->file('foto')->move('images/prestasi', $namaFile1);
            $info->foto=$namaFile1;
        }
        else
        {
            $info->foto='yes';
        }

        $info->save();

        return redirect('/informasi')->with('edit','Data Berhasil Diedit');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $info = informasi::find($id);
        $info->delete();

        return redirect('/informasi')->with('hapus','Data Berhasil Dihapus');
    }
}
