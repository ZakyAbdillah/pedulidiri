<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use PDF;

class UserController extends Controller
{
    public function index()
    {
        $data_user=\App\User::all();
        return view('user.index',compact('data_user'));
    }
    public function cetak_pdf()
    {
	    $user = User::all();
	    $pdf = PDF::loadview('user.print',compact('user'));
	    return $pdf->stream();
    }
    public function create(Request $request)
    {
        \App\User::create($request->all());
        return redirect('/user')->with('sukses','Data Berhasil Di input');
    }
    public function delete($id)
    {
        $user = \App\User::find($id);  
        $user->delete($user);
        return redirect('/user')->with('sukses','Data Berhasil Di Hapus');
    }
    public function edit($id)
    {
        $user =\App\User::find($id);
        return view('user/edit',compact('user'));
    }
    public function update(Request $request,$id)
    {
        $user =\App\User::find($id);
        $user->update($request->all());
        if ($request->hasfile('foto'))
        {
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        } 
        return redirect('/user')->with('sukses','Data Berhasil Di Update');
    }
    public function dataUser()
    {
        $data = User::all();
        return view('user.datauser',compact('data'));
    }
}
