<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */



    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        //

        // $pembayaran = pembayaran::join('rawat_inaps','rawat_inaps.ri_id','=','pembayarans.pb_ps_id')
        // ->join('users','users.id','=','rawat_inaps.ri_petugas_id')
        // ->join('pasiens','pasiens.ps_id','=','rawat_inaps.ri_ps_id')->get();

        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $request = app('request');
        $berkas1 = $request->file('akte');
        $namaFile1 = $berkas1->getClientOriginalName();
        $request->file('akte')->move('images/berkas', $namaFile1);

        $berkas2 = $request->file('surat_nikah');
        $namaFile2 = $berkas2->getClientOriginalName();
        $request->file('surat_nikah')->move('images/surat-nikah', $namaFile2);

        $berkas3 = $request->file('kk');
        $namaFile3 = $berkas3->getClientOriginalName();
        $request->file('kk')->move('images/kartu-keluarga', $namaFile3);

        

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'jk_pen' => $data['jk_pen'],
            'tempat_lahir_pen' => $data['tempat_lahir_pen'],
            'tgl_lahir_pen' => $data['tgl_lahir_pen'],
            'anak_ke' => $data['anak_ke'],
            'nama_ayah_pen' => $data['nama_ayah_pen'],
            'nama_ibu_pen' => $data['nama_ibu_pen'],
            'pekerjaan_ayah' => $data['pekerjaan_ayah'],
            'pekerjaan_ibu' => $data['pekerjaan_ibu'],
            'alamat' => $data['alamat'],
            'akte' => $namaFile1,
            'surat_nikah' => $namaFile2,
            'kk' => $namaFile3,
            
            
            // 'berkas1' =>$data->file['akte'],
            // 'namafile1' =>'berkas1'->getClientOriginalName(),
            // 'data' => file['akte']->move('images/berkas/', 'namafile1'),
            // 'akte' => $data['namafile1'],
            'no_hp' => $data['no_hp'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
