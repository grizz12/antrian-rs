<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputPasien;

class InputPasienController extends Controller
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
        $input_data = InputPasien::all();
        return view ('input_data.index',compact('input_data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('input_data.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'tgl_berobat' => 'required',
            'klinik' => 'required',
            'pembayaran' => 'required',
            'pasien_datang' => 'required',
            'nama_dokter' => 'required',
            'diagnosa' => 'required',
           
        ]);

        $input_data = new InputPasien();
        $input_data->tgl_berobat = $request->tgl_berobat;
        $input_data->klinik = $request->klinik;
        $input_data->pembayaran = $request->pembayaran;
        $input_data->pasien_datang = $request->pasien_datang;
        $input_data->nama_dokter = $request->nama_dokter;
        $input_data->diagnosa = $request->diagnosa;
       
        $input_data->save();
        return redirect()->route('input_data.index')->with('succes','Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $input_data = InputPasien::FindOrFail($id);
        return view('input_data.show',compact('input_data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $input_data = InputPasien::FindOrFail($id);
        return view('input_data.edit',compact('input_data'));
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
            'tgl_berobat' => 'required',
            'klinik' => 'required',
            'pembayaran' => 'required',
            'pasien_datang' => 'required',
            'nama_dokter' => 'required',
            'diagnosa' => 'required',
        ]);

        $input_data = InputPasien::FindOrFail($id);
        $input_data->tgl_berobat = $request->tgl_berobat;
        $input_data->klinik = $request->klinik;
        $input_data->pembayaran = $request->pembayaran;
        $input_data->pasien_datang = $request->pasien_datang;
        $input_data->nama_dokter = $request->nama_dokter;
        $input_data->diagnosa = $request->diagnosa;
        $input_data->save();
        return redirect()->route('input_data.index')->with('succes','Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $input_data = InputPasien::FindOrFail($id);
        $input_data->delete();
        return redirect()->route('input_data.index')->with('succes','Data berhasil dihapus!');
    }
}
