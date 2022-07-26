<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penduduk;
use App\Models\Gampong;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        
            $nomor=1;
            $penduduk = Penduduk::all();
            return view('penduduk.index', compact('nomor','penduduk'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $gampong=Gampong::all();  
        return view('penduduk.form',compact('gampong'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penduduk = new Penduduk();

        $penduduk-> nik = $request->nik;
        $penduduk-> nama = $request->nm;
        $penduduk-> tempat_lahir = $request->tmpt;
        $penduduk-> tanggal_lahir = $request->tgl;
        $penduduk-> jenis_kelamin = $request->jns;
        $penduduk-> agama = $request->agm;
        $penduduk-> alamat = $request->almt;
        $penduduk-> hp = $request->hp;
        $penduduk->gampongs_id = $request->nama_gampong;
        $penduduk->save();

        return redirect('/penduduk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penduduk = Penduduk::find($id);

        return view('penduduk.edit',compact('penduduk'));
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

        $penduduk = Penduduk::find($id);
        $penduduk-> nik = $request->nik;
        $penduduk-> nama = $request->nm;
        $penduduk-> tempat_lahir = $request->tmpt;
        $penduduk-> tanggal_lahir = $request->tgl;
        $penduduk-> jenis_kelamin = $request->jns;
        $penduduk-> agama = $request->agm;
        $penduduk-> alamat = $request->almt;
        $penduduk-> hp = $request->hp;
        $penduduk->gampongs_id = $request->nama_gampong;
        $penduduk->save();
        return redirect('/penduduk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduk = Penduduk::find($id);
        $penduduk->delete();
        return redirect('/penduduk');
    }
}
