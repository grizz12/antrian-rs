@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                
                <center>
                    <div class="card" style="width: 35rem;height: 20rem ;">
                        <div class="card-body">
                        <h1><b>Tiket Reservasi</b></h1>
                        <br>
                            <h2>Nomor Antrian Anda : <br>
                                {{ $tiket->id }}   
                            </h2>
                            <h2>Nomor Rekam Medis Anda : <br>
                                {{ $tiket->DataPasien['no_rekam'] }}
                            </h2>   
                        </div>           
                    </div>  
                <div class="mb-3">      
                    <a href="/cetak_pdf/{{$tiket->id}}" class="btn btn-danger" target="_blank"><i class="fa fa-print"></i>&nbsp;Cetak PDF</a>
                    <a href="{{ route('tiket.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                </div>
            </center>
            </div>
        </div>
    </div>
@endsection