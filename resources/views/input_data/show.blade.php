@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <center>
                <h1><b>Show Data Pasien</b></h1>
                </center>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <!-- Column 1 -->
                            <div class="col-sm">
                                <div class="mb-3">
                                    <label class="form-label">No Rekam Medis</label>
                                    <input type="text" class="form-control " name="no_rekam" value="{{ $data_pasien->no_rekam }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama</label>
                                    <input type="text" class="form-control " name="nama" value="{{ $data_pasien->nama }}" readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tgl Lahir</label>
                                    <input type="text" class="form-control " name="tgl_lahir" value="{{ $data_pasien->tgl_lahir }}"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Umur</label>
                                    <input type="text" class="form-control " name="umur" value="{{ $data_pasien->umur }}"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">No.Telephone</label>
                                    <input type="text" class="form-control" name="no_tlp" value="{{ $data_pasien->no_tlp }}"
                                        readonly>
        
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat</label>
                                    <textarea class="form-control" name="alamat" readonly>{{ $data_pasien->alamat }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" name="kec" value="{{ $data_pasien->kec }}"
                                        readonly>
        
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Kota/Kabupaten</label>
                                    <input type="text" class="form-control" name="kota" value="{{ $data_pasien->kota }}"
                                    readonly>
                                </div>
                            </div>
                            
                            <!-- Column 2 -->
                            <div class="col-sm">
                                <div class="mb-3">
                                    <label class="form-label">Nama Orang Tua</label>
                                    <input type="text" class="form-control" name="nama_orang_tua" value="{{ $data_pasien->nama_orang_tua }}"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Alamat Orang tua</label>
                                    <textarea class="form-control" name="alamat_orang_tua" readonly>{{ $data_pasien->alamat_orang_tua }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" name="pekerjaan" value="{{ $data_pasien->pekerjaan }}"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Agama</label>
                                    <input type="text" class="form-control" name="agama" value="{{ $data_pasien->agama }}"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Status Nikah</label>
                                    <input type="text" class="form-control" name="status" value="{{ $data_pasien->status }}"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jenis Kelamin</label>
                                    <input type="text" class="form-control" name="jenis_kelamin" value="{{ $data_pasien->jenis_kelamin }}"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <div class="d-grid gap-2">
                                        <a href="{{ route('data_pasien.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                                    </div>
                                </div>
                            </div>
                          </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection