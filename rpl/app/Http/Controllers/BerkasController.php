<?php

namespace App\Http\Controllers;

use App\berkas;
use App\user;
use Auth;
use Illuminate\Http\Request;

class BerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = user::find(Auth::user()->id);
        $berkas = berkas::all();
        return view('berkas.index', compact('berkas','pendaftaran'));  
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $berkas = berkas::all();
        return view('berkas.create', compact('berkas')); 
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
     * @param  \App\berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function show(berkas $berkas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function edit(berkas $berkas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, berkas $berkas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\berkas  $berkas
     * @return \Illuminate\Http\Response
     */
    public function destroy(berkas $berkas)
    {
        //
    }
}
