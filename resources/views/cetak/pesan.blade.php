@extends('layouts.admin')

@section('content')

<style>
    .card{
        align:center;
    }

    .text-body{
        text-align: left;
    }

    .card-text{
        float: left;
        text-align: left;
        
    }

</style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <center>
                    <div class="card" style="width: 50rem;height: 32rem;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-auto">
                                    <img src="{{asset('images')}}/PIKSI.png" alt="Piksi Ganesha" height="85" width="85">
                                </div>
                                <div class="col-md-auto">
                                    <h1><b>Tiket Reservasi</b></h1>
                                    <small>Pendaftaran Pasien Rawat Jalan Piksi Hospital</small>
                                </div>
                            </div>
                            <hr>
                            <div class="container">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="text-body">
                                                <h4>Nomor Antrian Anda : <br>
                                                    {{ $tiket->id }}   
                                                </h4>
                                                <br>
                                                <h4>Nomor Rekam Medis Anda : <br>
                                                    {{ $tiket->DataPasien['no_rekam'] }}
                                                </h4>   
                                                <br>
                                                <h4>Nama Dokter Anda : <br>
                                                    {{ $tiket->dokter }}
                                                </h4>
                                                <br>
                                                
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <small style="float:right">Tgl Kunjungan : {{$tiket->tgl_kunjungan}}</small><br>
                                        <small style="float:right">Jam Kunjungan : {{$tiket->waktu_kunjungan}}</small>
                                    </div>
                                </div>  
                                <div class="card border-dark">
                                    <div class="card-body">
                                        <small class="card-text">
                                            Catatan :<br>
                                            Jika Anda Sudah Mencetak Tiket Ini,Datang Ke Resepsionis Piksi Hospital
                                        </small>
                                    </div>
                                  </div>
                            </div> 
                        </div>  
                    </div>    
                <div class="mb-3">      
                    <a href="/cetak_pdf/{{$tiket->id}}" class="btn btn-danger" target="_blank"><i class="fa fa-print"></i>&nbsp;Cetak PDF</a>
                    <a href="{{ route('tiket.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                </div>
                <br><br><br>
            </center>
            </div>
        </div>
    </div>
    
@endsection