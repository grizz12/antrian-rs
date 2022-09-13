@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <center>
                <h1><b>Selamat Datang Di Website Kami</b></h1>
                <div class="card">
                    <div class="card-body">
                      <h2>Kunjungan Pasien</h2>
                      <div class="mb-3">
                        <div class="d-grid gap-2 d-md-block">
                            <a href="{{ route('data_pasien.index') }}" class="btn btn-primary" type="submit">Pasien Lama</a>
                            <a href="{{ route('data_pasien.create') }}" class="btn btn-primary" type="submit">Pasien Baru</a>
                        </div>
                    </div>
                    </div>
                  </div>
            </center>
        </div>
    </div>
</div>
@endsection
