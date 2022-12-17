<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPasien;
use App\Exports\DataPasienExport;
use Maatwebsite\Excel\Facades\Excel;
use Auth;
//  


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
        $this->authorize('admin');
        // $data_pasien = $data_pasien->where('id_user',Auth()->user()->id);
        // dd($data_pasien);
        $data_pasien = DataPasien::all();
        return view ('admin.data_pasien.index',compact('data_pasien'), [
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
        // $table_no = '01'; // nantinya menggunakan database dan table sungguhan
        // $tgl = substr(str_replace( '-', '', Carbon\carbon::now()), 0,2);
        
        // $no= $tgl.$table_no;
        // $auto=substr($no,2);
        // $auto=intval($auto)+1;
        // $auto_number=substr($no,0,2).str_repeat(0,(1-strlen($auto))).$auto;

            $selectNORM = DataPasien::select('no_rekam')->latest('tgl')->get()->first()->get();
            // dd($selectNORM);
            if($selectNORM){
                $i = substr($selectNORM[0]->no_rekam,-2);
                $createNORM = '20' . date('dmy'). $i + (1);                
            }else{
                $createNORM = '20' . date('dmy'). '01';
            }
            // dd($createNORM+1);

        return view('admin.data_pasien.create', [
            'title' => 'Tambah Data Pasien',
            'no_rm' => $createNORM ,
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
            'tgl' => 'required',
            'no_rekam' => 'required',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'pendidikan' => 'required',
            'nik' => 'required|max:16',
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
           
            'nama_ayah' => 'required',
            'alamat_ayah' => 'required',
            'tgl_lahir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'pendidikan_ayah' => 'required', 

            'nama_ibu' => 'required',
            'alamat_ibu' => 'required',
            'tgl_lahir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'pendidikan_ibu' => 'required', 

        ]);

        $data_pasien = new DataPasien();
        // dd($data_pasien);
        $data_pasien->id_user = Auth::user()->id;
        $data_pasien->tgl = $request->tgl;
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

        $data_pasien->nama_ayah = $request->nama_ayah;
        $data_pasien->alamat_ayah = $request->alamat_ayah;
        $data_pasien->pekerjaan_ayah = $request->pekerjaan_ayah;
        $data_pasien->penghasilan_ayah = $request->penghasilan_ayah;
        $data_pasien->pendidikan_ayah = $request->pendidikan_ayah;
        $data_pasien->tgl_lahir_ayah = $request->tgl_lahir_ayah;

        $data_pasien->nama_ibu = $request->nama_ibu;
        $data_pasien->alamat_ibu = $request->alamat_ibu;
        $data_pasien->pekerjaan_ibu = $request->pekerjaan_ibu;
        $data_pasien->penghasilan_ibu = $request->penghasilan_ibu;
        $data_pasien->pendidikan_ibu = $request->pendidikan_ibu;
        $data_pasien->tgl_lahir_ibu = $request->tgl_lahir_ibu;
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
        return view('admin.data_pasien.show',compact('data_pasien'),[
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
        return view('admin.data_pasien.edit',compact('data_pasien'), [
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
            'tgl' => 'required',
            'no_rekam' => '$no_rm',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'pendidikan' => 'required',
            'nik' => 'required|max:16',
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
            
            'nama_ayah' => 'required',
            'alamat_ayah' => 'required',
            'tgl_lahir_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'penghasilan_ayah' => 'required',
            'pendidikan_ayah' => 'required', 

            'nama_ibu' => 'required',
            'alamat_ibu' => 'required',
            'tgl_lahir_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'penghasilan_ibu' => 'required',
            'pendidikan_ibu' => 'required', 
        ]);

        $data_pasien = DataPasien::FindOrFail($id);
        $data_pasien->id_user = Auth::user()->id;
        $data_pasien->tgl = $request->tgl;
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
        
        $data_pasien->nama_ayah = $request->nama_ayah;
        $data_pasien->alamat_ayah = $request->alamat_ayah;
        $data_pasien->pekerjaan_ayah = $request->pekerjaan_ayah;
        $data_pasien->penghasilan_ayah = $request->penghasilan_ayah;
        $data_pasien->pendidikan_ayah = $request->pendidikan_ayah;
        $data_pasien->tgl_lahir_ayah = $request->tgl_lahir_ayah;

        $data_pasien->nama_ibu = $request->nama_ibu;
        $data_pasien->alamat_ibu = $request->alamat_ibu;
        $data_pasien->pekerjaan_ibu = $request->pekerjaan_ibu;
        $data_pasien->penghasilan_ibu = $request->penghasilan_ibu;
        $data_pasien->pendidikan_ibu = $request->pendidikan_ibu;
        $data_pasien->tgl_lahir_ibu = $request->tgl_lahir_ibu;
        $data_pasien->save();
        return redirect()->route('admin.data_pasien.index')->with('succes','Data berhasil dibuat!');
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

    //User
        public function show_($id)
    {
        $data_pasien = DataPasien::FindOrFail($id);
        $Cari_data = $data_pasien->where('id_user',Auth()->user()->id)->get();
        return view('user/data_pasien/show', [
            'title' => 'Lihat Data Pasien',
            'data_pasien' => $Cari_data[0],
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_($id)
    {
        $data_pasien = DataPasien::FindOrFail($id);
        $Cari_data = $data_pasien->where('id_user',Auth()->user()->id)->get();
        return view('user/data_pasien/edit', [
            'title' => 'Ubah Data Pasien',
            'data_pasien' => $Cari_data[0],
        ]);
    }

}
