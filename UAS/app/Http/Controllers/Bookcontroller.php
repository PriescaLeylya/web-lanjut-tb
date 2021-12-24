<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('book');
    }

    public function tambah(Request $request)
    {
        // insert data ke table pegawai
        DB::table('booking')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'ttl' => $request->ttl,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'paket' => $request->paket,
            'bukti_tf' => $request->bukti_tf
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/book');
    }
    public function create(Request $request)
    {
        if ($request->file('image')) {
            $image = $request->file('image')->store('images', 'public');
        }
        DB::table('booking')->insert([
            'nama' => $request->nama,
            'email' => $request->email,
            'ttl' => $request->ttl,
            'notelp' => $request->notelp,
            'alamat' => $request->alamat,
            'paket' => $request->paket,
            'bukti_tf' => $image
        ]);
        return redirect('/book')->with('success', 'Product Created Successfully!');
    }
}
