@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <center>
                    <h1><b>Tiket </b></h1>
                        @php $no = 1; @endphp
                            @foreach ($tiket as $data)
                            <h1><b>No Antrian Anda : <br>
                                {{ $no++ }}    
                            </b></h1>
                            <h1>
                                <b>No Rekam Medis Anda : <br>
                                    {{ $data->DataPasien['no_rekam'] }}</b>
                            </h1>                       
                    @endforeach
                </center>
            </div>
        </div>
    </div>
@endsection