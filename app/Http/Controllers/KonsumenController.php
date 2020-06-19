<?php

namespace App\Http\Controllers;

use App\Konsumen;
use Illuminate\Http\Request;
use App\Http\Requests\KonsumenRequest;
use Alert;

class KonsumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('konsumen.index',['konsumen'=>Konsumen::all()]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis_kendaraan = ['Mobil','Motor'];
        return view('konsumen.form-create',compact('jenis_kendaraan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KonsumenRequest $request)
    {
        // dd($request->all());
        Konsumen::create($request->all());
        Alert::toast("Data Konsumen {$request->konsumen} Berhasil Ditambahkan!" ,"success");
        return redirect('/konsumen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function show(Konsumen $konsumen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $konsumen = Konsumen::find($id);
        // dd($konsumen);
        $jenis_kendaraan = ['Mobil','Motor'];
        return view('konsumen.form-edit',compact('jenis_kendaraan','konsumen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function update(KonsumenRequest $request)
    {
        Konsumen::find($request->id)->update($request->all());
        Alert::toast("Data Konsumen {$request->konsumen} Berhasil Diedit!","success");
        return redirect()->route('konsumen.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Konsumen  $konsumen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Konsumen::destroy($id);
        Alert::toast("Data Berhasil Terhapus!","error");
        return redirect()->route('konsumen.index');
    }
}
