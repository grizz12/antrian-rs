<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
use App\Models\DataPasien;

class CetakController extends Controller
{
    public function cetak(){
        $tiket = Tiket::with('DataPasien')->get();
        //$tiket = Tiket::all();
        return view ('tiket.Pesan.pesan',compact('tiket'));
    }
}
