<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPasien;
use App\Exports\DataPasienExport;
use Maatwebsite\Excel\Facades\Excel;

class DataPasienController extends Controller
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

        $data_pasien = DataPasien::all();
        return view ('data_pasien.index',compact('data_pasien'), [
            'title' => 'Data Pasien',
        ]);
    }


    public function dataExport(){
        return Excel::download(new DataPasienExport,'DataPasien.xlsx');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_pasien.create', [
            'title' => 'Tambah Data Pasien',
        ]);
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
            'no_rekam' => 'required',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'pendidikan' => 'required',
            'nik' => 'required',
            'gol_darah' => 'required',
            'alergi' => 'required',
            'keterangan_alergi' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required',
            'kec' => 'required',
            'kota' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'jenis_kelamin' => 'required',
            'pilih_orang_tua' => 'required',
            'nama_orang_tua' => 'required',
            'alamat_orang_tua' => 'required',
            'tgl_lahir_orang_tua',
            'pekerjaan_orang_tua' => 'required',
            'penghasilan_orang_tua' => 'required',
            'pendidikan_orang_tua' => 'required', 

        ]);

        $data_pasien = new DataPasien();
        $data_pasien->no_rekam = $request->no_rekam;
        $data_pasien->nama = $request->nama;
        $data_pasien->tmp_lahir = $request->tmp_lahir;
        $data_pasien->tgl_lahir = $request->tgl_lahir;
        $data_pasien->pendidikan = $request->pendidikan;
        $data_pasien->nik = $request->nik;
        $data_pasien->gol_darah = $request->gol_darah;
        $data_pasien->alergi = $request->alergi;
        $data_pasien->keterangan_alergi = $request->keterangan_alergi;
        $data_pasien->no_tlp = $request->no_tlp;
        $data_pasien->alamat = $request->alamat ;
        $data_pasien->kec = $request->kec;
        $data_pasien->kota = $request->kota;
        $data_pasien->pekerjaan = $request->pekerjaan;
        $data_pasien->agama = $request->agama;
        $data_pasien->status = $request->status;
        $data_pasien->jenis_kelamin = $request->jenis_kelamin;
        $data_pasien->pilih_orang_tua = $request->pilih_orang_tua;
        $data_pasien->nama_orang_tua = $request->nama_orang_tua;
        $data_pasien->alamat_orang_tua = $request->alamat_orang_tua;
        $data_pasien->pekerjaan_orang_tua = $request->pekerjaan_orang_tua;
        $data_pasien->penghasilan_orang_tua = $request->penghasilan_orang_tua;
        $data_pasien->pendidikan_orang_tua = $request->pendidikan_orang_tua;
        $data_pasien->tgl_lahir_orang_tua = $request->tgl_lahir_orang_tua;
        $data_pasien->save();
        return redirect()->route('tiket.create')->with('succes','Data berhasil dibuat!');
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
        $data_pasien = DataPasien::FindOrFail($id);
        return view('data_pasien.show',compact('data_pasien'),[
            'title' => 'Lihat Data Pasien',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data_pasien = DataPasien::FindOrFail($id);
        return view('data_pasien.edit',compact('data_pasien'), [
            'title' => 'Ubah Data Pasien',
        ]);
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
        //
        $validated = $request->validate([
            'no_rekam' => 'required',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'pendidikan' => 'required',
            'nik' => 'required',
            'gol_darah' => 'required',
            'alergi' => 'required',
            'keterangan_alergi' => 'required',
            'no_tlp' => 'required',
            'alamat' => 'required',
            'kec' => 'required',
            'kota' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'jenis_kelamin' => 'required',
            'pilih_orang_tua' => 'required',
            'nama_orang_tua' => 'required',
            'alamat_orang_tua' => 'required',
            'tgl_lahir_orang_tua',
            'pekerjaan_orang_tua' => 'required',
            'penghasilan_orang_tua' => 'required',
            'pendidikan_orang_tua' => 'required',
        ]);

        $data_pasien = DataPasien::FindOrFail($id);
        $data_pasien->no_rekam = $request->no_rekam;
        $data_pasien->nama = $request->nama;
        $data_pasien->tmp_lahir = $request->tmp_lahir;
        $data_pasien->tgl_lahir = $request->tgl_lahir;
        $data_pasien->pendidikan = $request->pendidikan;
        $data_pasien->nik = $request->nik;
        $data_pasien->gol_darah = $request->gol_darah;
        $data_pasien->alergi = $request->alergi;
        $data_pasien->keterangan_alergi = $request->keterangan_alergi;
        $data_pasien->no_tlp = $request->no_tlp;
        $data_pasien->alamat = $request->alamat ;
        $data_pasien->kec = $request->kec;
        $data_pasien->kota = $request->kota;
        $data_pasien->pekerjaan = $request->pekerjaan;
        $data_pasien->agama = $request->agama;
        $data_pasien->status = $request->status;
        $data_pasien->jenis_kelamin = $request->jenis_kelamin;
        $data_pasien->pilih_orang_tua = $request->pilih_orang_tua;
        $data_pasien->nama_orang_tua = $request->nama_orang_tua;
        $data_pasien->alamat_orang_tua = $request->alamat_orang_tua;
        $data_pasien->pekerjaan_orang_tua = $request->pekerjaan_orang_tua;
        $data_pasien->penghasilan_orang_tua = $request->penghasilan_orang_tua;
        $data_pasien->pendidikan_orang_tua = $request->pendidikan_orang_tua;
        $data_pasien->tgl_lahir_orang_tua = $request->tgl_lahir_orang_tua;
        $data_pasien->save();
        return redirect()->route('data_pasien.index')->with('succes','Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data_pasien = DataPasien::FindOrFail($id);
        $data_pasien->delete();
        return redirect()->route('data_pasien.index')->with('succes','Data berhasil dihapus!');
    }
}
