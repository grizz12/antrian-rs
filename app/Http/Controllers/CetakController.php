<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\DataPasien;
use App\Http\Controllers\TiketController;
// use Barryvdh\DomPDF\Facade\Pdf;

use PDF;

class CetakController extends Controller
{
    public function show($id){
        $tiket = Tiket::FindOrFail($id);
        return view('cetak.pesan',compact('tiket'));
        
    }

    public function cetak_pdf($id){
        $tiket = Tiket::FindOrFail($id);
        $pdf = PDF::loadview('cetak.pesan_pdf',compact('tiket'));
        return $pdf->download('pesan_tiket_pasien.pdf');
        // return $pdf->stream();
        dd($tiket);
        
    }
}
  