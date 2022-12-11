@extends('layouts.admin')

@section('content')

<style>
    .card{
        align:center;
    }

    .text-body{
        text-align: left;
    }
</style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <center>
                    <fieldset>
                    <div class="card" style="width: 40rem;height: 30rem;">
                        <div class="card-body">
                        <small style="float: right;">Tgl-Kunjungan : {{$tiket->tgl_kunjungan}}</small>
                        <div class="text-body" style="float: left">
                            <h1><b>Tiket Reservasi</b></h1>
                            <br>
                                <h2>Nomor Antrian Anda : <br>
                                    {{ $tiket->id }}   
                                </h2>
                                <br>
                                <h2>Nomor Rekam Medis Anda : <br>
                                    {{ $tiket->DataPasien['no_rekam'] }}
                                </h2>   
                                <br>
                                <h2>Nama Dokter Anda : <br>
                                    {{ $tiket->dokter }}
                                </h2>
                            </div>
                        </div>  
                    </fieldset>         
                    </div>  
                
                <div class="mb-3" align="center">      
                    <a href="/cetak_pdf/{{$tiket->id}}" class="btn btn-danger" target="_blank"><i class="fa fa-print"></i>&nbsp;Cetak PDF</a>
                    <a href="{{ route('tiket.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                </div>
                <br><br><br>
            </center>
            </div>
        </div>
    </div>
    
@endsection