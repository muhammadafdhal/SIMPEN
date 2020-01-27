<?php

namespace App\Http\Controllers;

use App\pembayaran;
use App\user;
use Auth;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = user::find(Auth::user()->id);
        $pembayaran = pembayaran::join('users','users.id','=','pembayarans.id_user')
        ->select('*','pembayarans.id as id')->orderBy('status')->get();
        $siswa = pembayaran::join('users','users.id','=','pembayarans.id_user')->where('id_user', Auth::user()->id)->get();

        // dd($pendaftaran);
        // die;
        return view('pembayaran.index', compact('pembayaran','pendaftaran','siswa'));
       
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembayaran = pembayaran::all();
        $orangtua = user::where('rule', ['Orangtua'])->get();
        return view('pembayaran.create', compact('pembayaran','orangtua'));
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
        $pembayaran = new pembayaran;
        $pembayaran->bulan = implode(", ", $request->bulan);
        $arr = explode(",", $pembayaran->bulan);
        $pembayaran->total = count($arr)*150000;

        // $berkas1 = $request->file('bukti');
        // $namaFile1 = $berkas1->getClientOriginalName();
        // $request->file('bukti')->move('images/bukti-pembayaran', $namaFile1);
        // $pembayaran->bukti=$namaFile1;
        
        if($berkas1 = $request->file('bukti'))
        {
            $namaFile1 = $berkas1->getClientOriginalName();
            $request->file('bukti')->move('images/bukti-pembayaran', $namaFile1);
            $pembayaran->bukti=$namaFile1;
            $pembayaran->status=$request['status'];
            $pembayaran->id_user = Auth::user()->id;
        }
        else
        {
            $pembayaran->bukti=$request['bukti'];
            $pembayaran->status='Diterima';
            $pembayaran->id_user = $request['bukti'];
            
        }

        $pembayaran->save();

        return redirect('/pembayaran')->with('proses','Pembayaran Berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayaran $pembayaran)
    {
        //
    }

    public function verified($id) {
        $pembayaran = pembayaran::find($id);
        $pembayaran->status = 'Diterima';
        $pembayaran->save();
        
        return redirect('/pembayaran')->with('bayar', 'Data Pembayaran Diterima');
    }
}
