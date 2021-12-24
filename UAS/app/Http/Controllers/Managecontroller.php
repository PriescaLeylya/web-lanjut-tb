<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use PDF;

class ManageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (Gate::allows('manage-book')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function manage()
    {
        $book = Book::all();
        return view('manage', ['booking' => $book]);
    }
    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('editbook', ['booking' => $book]);
    }
    public function update($id, Request $request)
    {
        $book = Book::find($id);
        $book->nama = $request->nama;
        $book->email = $request->email;
        $book->ttl = $request->ttl;
        $book->notelp = $request->notelp;
        $book->alamat = $request->alamat;
        $book->paket = $request->paket;
        $book->bukti_tf = $request->bukti_tf;
        $book->status = $request->status;

        $book->save();
        return redirect('/manage');
    }
    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/manage');
    }
    public function cetak_pdf()
    {
        $book = Book::all();
        $pdf = PDF::loadview('manage_pdf', ['book' => $book]);
        return $pdf->stream();
    }
}
