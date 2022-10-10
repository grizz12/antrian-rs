<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataPasien;
use App\Models\Tiket;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data_pasien = DataPasien::count();
        $tiket = Tiket::count();

        return view('home',compact('data_pasien','tiket'));

    }
}
