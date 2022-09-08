@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <center>
                    <h1><b>Add Data Pasien</b></h1>
                </center>
                <div class="card border-secondary">
                    <div class="card-body">
                        <form action="{{ route('input_data.store') }}" method="post">
                            @csrf
                                    <div class="mb-3">
                                        <label for="">Tanggal Berobat</label>
                                        <input type="date" name="tgl_berobat" class="form-control @error('tgl_berobat') is-invalid @enderror">
                                        @error('tgl_berobat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Klinik Yang Dituju</label>
                                        <input type="text" name="klinik" class="form-control @error('klinik') is-invalid @enderror">
                                        @error('klinik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Cara Pembayaran</label>
                                        <input type="text" name="pembayaran" class="form-control @error('pembayaran') is-invalid @enderror">
                                        @error('pembayaran')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Cara Pasien Datang</label>
                                        <input type="text" name="pasien_datang" class="form-control @error('pasien_datang') is-invalid @enderror">
                                        @error('pasien_datang')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for=""></label>Nama Dokter
                                        <input type="text" name="nama_dokter" class="form-control @error('nama_dokter') is-invalid @enderror">
                                        @error('nama_dokter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Diagnosa</label>
                                        <input type="text" name="diagnosa" class="form-control @error('diagnosa') is-invalid @enderror">
                                        @error('diagnosa')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <a href="{{ route('input_data.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                                        </div>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection