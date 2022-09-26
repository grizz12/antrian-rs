@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <center>
                    <div class="card">
                        <div class="card-body">
                        <h1><b>Tiket Reservasi</b></h1>
                        <br>
                            <h2>Nomor Antrian Anda : <br>
                                {{ $tiket->id }}   
                            </h2>
                            <h2> Rekam Medis Anda : <br>
                                {{ $tiket->DataPasien['no_rekam'] }}
                            </h2>   
                        </div>           
                    </div>  
            </center>
            </div>
        </div>
    </div>
@endsection  

