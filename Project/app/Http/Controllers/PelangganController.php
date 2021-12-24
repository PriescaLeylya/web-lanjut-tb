<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Tourtravel;
use PDF;


class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelanggans = Tourtravel::all();
        return view('pelanggans.index',['pelanggans'=>$pelanggans]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelanggans = Tourtravel::all();
        return view('pelanggans.create',['pelanggans'=>$pelanggans]);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggans = new Pelanggan;
        //add data
        //Pelanggan::create($request->all());
        // if true, redirect to index
        //return redirect()->route('pelanggans.index')->with('success', 'Add data success!');
  
        $pelanggans->nama = $request->nama;
        $pelanggans->jenis_kelamin = $request->jenis_kelamin;
        $pelanggans->phone_number = $request->phone_number;
        $pelanggans->alamat = $request->alamat;
        $tourtravels = new Tourtravel;
        $tourtravels->id = $request->Tourtravel;
        $pelanggans->tourtravels()->associate($tourtravels);
        $pelanggans->save();
        
        // if true, redirect to index
        return redirect()->route('pelanggans.index')
        ->with('success', 'Add data success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pelanggans = Tourtravel::find($id);
        return view('pelanggans.show',['pelanggans'=>$pelanggans]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pelanggans = Pelanggan::find($id);
        return view('pelanggans.edit',['pelanggans'=>$pelanggans]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pelanggans = Pelanggan::find($id);
        $pelanggans->nama = $request->nama;
        $pelanggans->jenis_kelamin = $request->jenis_kelamin;
        $pelanggans->phone_number = $request->phone_number;
        $pelanggans->alamat = $request->alamat;
        $pelanggans->save();
        return redirect()->route('pelanggans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggans = Pelanggan::find($id);
        $pelanggans->delete();
        return redirect()->route('pelanggans.index');
    }
    public function search(Request $request)
    {
        $keyword = $request->search;
        $pelanggans = Pelanggan::where('nama', 'like', "%" . $keyword . "%")->paginate(5);
        return view('pelanggans.index', compact('pelanggans'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function __construct()
    {
          $this->middleware('auth');
    }
    public function report(){
        $pelanggan = Pelanggan::all();
        $pdf = PDF::loadview('pelanggans.report',['pelanggans'=>$pelanggans]);
        return $pdf->stream();
    }
       
}
