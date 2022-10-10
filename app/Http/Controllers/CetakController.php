<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\DataPasien;
use App\Http\Controllers\TiketController;
use Barryvdh\DomPDF\Facade\Pdf;

// use PDF;

class CetakController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show($id){
        $tiket = Tiket::FindOrFail($id);
        return view('cetak.pesan',compact('tiket'));
        
    }

    public function cetak_pdf($id){
        $tiket = Tiket::FindOrFail($id);
        $customPaper = array(0,0,390,390);
        $pdf = PDF::loadview('cetak.pesan_pdf', ['tiket' => $tiket])->setPaper($customPaper, 'landscape');
        return $pdf->download('pesan_tiket_pasien.pdf');
        // return $pdf->stream();
        
    }
}
  