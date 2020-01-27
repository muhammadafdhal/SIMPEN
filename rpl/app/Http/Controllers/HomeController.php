<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\pembayaran;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $siswa = user::where('rule', ['Orangtua'])
        ->where('verifikasi', ['Diterima'])->count();

        $pendaftaran = user::where('rule', ['Orangtua'])
        ->where('verifikasi', ['Menunggu'])->count();

        $pembayaran = pembayaran::
        where('status', ['Menunggu'])->count();

        return view('home', compact('siswa', 'pendaftaran', 'pembayaran'));
    }
}
