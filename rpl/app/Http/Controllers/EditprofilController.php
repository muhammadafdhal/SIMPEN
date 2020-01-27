<?php

namespace App\Http\Controllers;

use App\editprofil;
use Illuminate\Http\Request;
use App\user;
use Hash;
use App\Rules\MatchOldPassword;

class EditprofilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $editprofil = user::find($id);
        return view('editprofil.index', compact('editprofil'));
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
     * @param  \App\editprofil  $editprofil
     * @return \Illuminate\Http\Response
     */
    public function show(editprofil $editprofil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\editprofil  $editprofil
     * @return \Illuminate\Http\Response
     */
    public function edit($editprofil)
    {
        //
        $editprofil = user::all();

        return view('editprofil.index', compact('editprofil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\editprofil  $editprofil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $editprofil = user::find($id);
        $editprofil->name=$request['name'];
        $editprofil->email=$request['email'];
        $editprofil->alamat=$request['alamat'];
        $editprofil->no_hp=$request['no_hp'];
        
        $editprofil->save();
        return redirect('/home')->with('success','Profil Berhasil diubah');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\editprofil  $editprofil
     * @return \Illuminate\Http\Response
     */
    public function destroy(editprofil $editprofil)
    {
        //
    }

    public function ubah_password(Request $editprofil)
    {
        $editprofil->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        user::find(auth()->user()->id)->update(['password'=> Hash::make($editprofil->new_password)]);

        return redirect('/home')->with('success', 'Password Berhasil Diubah');
    }
}
