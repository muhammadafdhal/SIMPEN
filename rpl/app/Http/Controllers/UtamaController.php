<?php

namespace App\Http\Controllers;

use App\utama;
use Illuminate\Http\Request;
use App\informasi;

class UtamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pendaftaran = informasi::where('status',['Info Pendaftaran'])->get();
        $pengumuman = informasi::where('status',['Pengumuman'])->get();
        $prestasi = informasi::where('status',['Prestasi'])->get();

        return view('utama.index', compact('pendaftaran','pengumuman','prestasi'));
    }

    public function pengumuman()
    {
        //
        $pengumuman = informasi::where('status',['Pengumuman'])->get();
        return view('utama.pengumuman', compact ('pengumuman'));
    }

    public function sambutan()
    {
        //
        return view('utama.sambutan');
    }

    public function galeri()
    {
        //
        return view('utama.galeri');
    }

    public function profil_sekolah()
    {
        //
        return view('utama.profil_sekolah');
    }

    public function prestasi()
    {
        //
        $prestasi = informasi::where('status',['Prestasi'])->get();
        return view('utama.prestasi', compact ('prestasi'));
    }

    
    public function fasilitas()
    {
        //
        return view('utama.fasilitas');
    }

    public function visi_misi()
    {
        //
        return view('utama.visi_misi');
    }

    public function aktivitas()
    {
        //
        return view('utama.aktivitas');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function show(utama $utama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function edit(utama $utama)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, utama $utama)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\utama  $utama
     * @return \Illuminate\Http\Response
     */
    public function destroy(utama $utama)
    {
        //
    }
}
