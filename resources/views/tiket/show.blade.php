@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                {{-- <center>
                <h1><b>{{ $title }}</b></h1>
                </center> --}}
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Pilih Jaminan</label>
                            <input type="text" class="form-control" name="pinjaman" value="{{ $tiket->pinjaman }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Poliklinik Yang Dituju</label>
                            <input type="text" class="form-control" name="poli" value="{{ $tiket->poli }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Waktu Kunjungan</label>
                            <input type="text" class="form-control" name="waktu_kunjungan" value="{{ $tiket->waktu_kunjungan }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Kunjungan</label>
                            <input type="text" class="form-control" name="tgl_kunjungan" value="{{ $tiket->tgl_kunjungan }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Dokter</label>
                            <input type="text" class="form-control" name="dokter" value="{{ $tiket->dokter }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No.Rekam Medis</label>
                            <input type="text" class="form-control" name="no_rekam" value="{{ $tiket->DataPasien['no_rekam'] }}"
                                readonly>
                        </div> 
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('tiket.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection