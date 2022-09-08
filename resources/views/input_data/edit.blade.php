@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <center>
                    <h1><b>Update Data Pasien</b></h1>
                </center>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('input_data.update', $input_data->id) }}" method="post">
                            @csrf
                            @method('put')

                            <div class="row">
                                <!-- Column 1 -->
                                <div class="col-sm">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Berobat</label>
                                        <input type="date" class="form-control  @error('tgl_berobat') is-invalid @enderror"
                                            name="tgl_berobat" value="{{ $input_data->tgl_berobat }}">
                                        @error('tgl_berobat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Klinik yang Dituju</label>
                                        <input type="text" class="form-control  @error('klinik') is-invalid @enderror"
                                            name="klinik" value="{{ $input_data->klinik }}">
                                        @error('klinik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Cara Pembayaran</label>
                                        <input type="text" class="form-control  @error('pembayaran') is-invalid @enderror"
                                            name="pembayaran" value="{{ $input_data->pembayaran }}">
                                        @error('pembayaran')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Cara Pasien Datang</label>
                                        <input type="text" class="form-control  @error('pasien_datang') is-invalid @enderror"
                                            name="pasien_datang" value="{{ $data_pasien->umur }}">
                                        @error('pasien_datang')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Nama Dokter</label>
                                        <input type="nama_dokter" class="form-control  @error('nama_dokter') is-invalid @enderror"
                                            name="nama_dokter" value="{{ $input_data->nama_dokter }}">
                                        @error('nama_dokter')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">Diagnosa</label>
                                        <input type="text" class="form-control  @error('diagnosa') is-invalid @enderror"
                                            name="kec" value="{{ $data_pasien->diagnosa }}">
                                        @error('kec')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection