<?php

namespace App\Http\Controllers;
use App\Perjalanan;
use Illuminate\Http\Request;
use Auth;

class PerjalananController extends Controller
{
    public function index()
    {
        $perjalanan = Perjalanan::where('user_id',Auth::user()->id)->get();
        return view('perjalanan.index',compact('perjalanan'));
    }
    public function create(Request $request)
    {
        \App\Perjalanan::create([
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'lokasi' => $request->lokasi,
            'suhutubuh' => $request->suhutubuh,
            'user_id' => auth()->user()->id,
        ]);
        return redirect('/perjalanan')->with('sukses','Data Berhasil Di input');
    }
    public function delete($id)
    {
        $jalan = \App\Perjalanan::find($id);
        $jalan->delete($jalan);
        return redirect('/perjalanan')->with('sukses','Data Berhasil Di Hapus');
    }
}

