<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gampong;

class GampongController extends Controller
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
            $nomor =1;
            $gampong = Gampong::all();
            return view('gampong.index', compact('nomor','gampong'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gampong.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('create',Gampong::class);
        $gampong = new Gampong();

        $gampong->nama_gampong = $request->nm;
        $gampong->luas_gampong = $request->luas;

        $gampong->save();

        return redirect('/gampong');
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
        $gampong = Gampong::find($id);

        return view('gampong.edit',compact('gampong'));
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
        $gampong = Gampong::find($id);
        $gampong->nama_gampong = $request->nm;
        $gampong->luas_gampong = $request->luas;

        $gampong->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gampong  = Gampong::find($id);
        $gampong->delete();
        return redirect('/gampong');
    }
}
