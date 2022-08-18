<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontend extends Controller
{
    public function index()
    {
        return view('frontend.pages.index');
    }
    
    public function kontak()
    {
        return view('frontend.pages.kontak');
    }
    
    public function pesan()
    {
        return view('frontend.pages.pesan');
    }
    
    public function konfirmasi(Request $request)
    {
        return view('frontend.pages.konfirmasi', [
            'nama' => $request['nama'],
            'notelp' => $request['notelp'],
            'berkas' => $request->file('berkas')->getClientOriginalName(),
            'kertas' => $request['kertas'],
            'ukuran' => $request['ukuran'],
            'keterangan' => $request['keterangan']
        ]);
    }
}
