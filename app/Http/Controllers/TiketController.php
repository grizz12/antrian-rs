<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\DataPasien;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiket = Tiket::with('DataPasien')->get();
        // $tiket = Tiket::all();
        return view('tiket.index', ['tiket' => $tiket]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_pasien = DataPasien::all();
        return view('tiket.create', compact('data_pasien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'pinjaman' => 'required',
            'poli' => 'required',
            'tgl_kunjungan' => 'required',
            'id_data_pasien' => 'required|unique:data_pasiens',
           
        ]);

        $tiket = new Tiket();
        $tiket->pinjaman = $request->pinjaman;
        $tiket->poli = $request->poli;
        $tiket->tgl_kunjungan = $request->tgl_kunjungan;
        $tiket->id_data_pasien = $request->id_data_pasien;
        $tiket->save();
        return redirect()->route('tiket.index')->with('succes','Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tiket = Tiket::FindOrFail($id);
        return view('tiket.show',compact('tiket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiket = Tiket::FindOrFail($id);
        $data_pasien = DataPasien::all();
        return view('tiket.edit',compact('tiket','data_pasien'));
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
        $validated = $request->validate([
            'pinjaman' => 'required',
            'poli' => 'required',
            'tgl_kunjungan' => 'required',
            'id_data_pasien' => 'required',

        ]);

        $tiket = Tiket::FindOrFail($id);
        $tiket->pinjaman = $request->pinjaman;
        $tiket->poli = $request->poli;
        $tiket->tgl_kunjungan = $request->tgl_kunjungan;
        $tiket->id_data_pasien = $request->id_data_pasien;
        $tiket->save();
        return redirect()->route('tiket.index')->with('succes','Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiket = Tiket::FindOrFail($id);
        $tiket->delete();
        return redirect()->route('tiket.index')->with('succes','Data berhasil dihapus!');
    }
}
