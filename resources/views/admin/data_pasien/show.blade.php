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
                        <div class="card">
                            <div class="card-body">
                                <h4><b> Informasi Detail Pasien</b></h4>
                                <div class="row">
                                    <!-- Column 1 -->
                                    <div class="col-sm">
                                        <div class="mb-3">
                                            <label class="form-label">No Rekam Medis</label>
                                            <input type="text" class="form-control " name="no_rekam" value="{{ $data_pasien->no_rekam }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal Pengisian</label>
                                            <input type="text" class="form-control " name="tgl_lahir" value="{{ $data_pasien->tgl }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">NIK</label>
                                            <input type="text" class="form-control" name="nik" value="{{ $data_pasien->nik }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Nama</label>
                                            <input type="text" class="form-control " name="nama" value="{{ $data_pasien->nama }}" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control " name="tmp_lahir" value="{{ $data_pasien->tmp_lahir }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tgl Lahir</label>
                                            <input type="text" class="form-control " name="tgl_lahir" value="{{ $data_pasien->tgl_lahir }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Jenis Kelamin</label>
                                            <input type="text" class="form-control" name="jenis_kelamin" value="{{ $data_pasien->jenis_kelamin }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Agama</label>
                                            <input type="text" class="form-control" name="agama" value="{{ $data_pasien->agama }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">No.Telephone</label>
                                            <input type="text" class="form-control" name="no_tlp" value="{{ $data_pasien->no_tlp }}"
                                                readonly>
                
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Pendidikan</label>
                                            <input type="text" class="form-control" name="pendidikan" value="{{ $data_pasien->pendidikan }}"
                                                readonly>
                                        </div>
                    
    
                                    </div>
                                    
                                    <!-- Column 2 -->
                                    <div class="col-sm">
                                        <div class="mb-3">
                                            <label class="form-label">Status Nikah</label>
                                            <input type="text" class="form-control" name="status" value="{{ $data_pasien->status }}"
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
                                        <div class="mb-3">
                                            <label class="form-label">Pekerjaan</label>
                                            <input type="text" class="form-control" name="pekerjaan" value="{{ $data_pasien->pekerjaan }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Golongan Darah</label>
                                            <input type="text" class="form-control" name="gol_darah" value="{{ $data_pasien->gol_darah }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Alergi</label>
                                            <input type="text" class="form-control" name="alergi" value="{{ $data_pasien->alergi }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Keterangan Alergi</label>
                                            <textarea class="form-control" name="keterangan_alergi" readonly>{{ $data_pasien->keterangan_alergi }}</textarea>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h4><b> Informasi Detail Orang Tua</b></h4>
                                <br>

                                <div class="row">
                                    <div class="col-sm">
                                        <h4 align="center">Ayah</h4>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Ayah</label>
                                            <input type="text" class="form-control" name="nama_ayah" value="{{ $data_pasien->nama_ayah }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal Lahir Ayah</label>
                                            <input type="text" class="form-control" name="tgl_lahir_ayah" value="{{ $data_pasien->tgl_lahir_ayah }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Pendidikan Ayah</label>
                                            <input type="text" class="form-control" name="pendidikan_ayah" value="{{ $data_pasien->pendidikan_ayah }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Pekerjaan Ayah</label>
                                            <input type="text" class="form-control" name="pekerjaan_ayah" value="{{ $data_pasien->pekerjaan_ayah }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Penghasilan Ayah</label>
                                            <input type="text" class="form-control" name="penghasilan_ayah" value="{{ $data_pasien->penghasilan_ayah }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Alamat Ayah</label>
                                            <textarea class="form-control" name="alamat_ayah" readonly>{{ $data_pasien->alamat_ayah }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <h4 align="center">Ibu</h4>
                                        <div class="mb-3">
                                            <label class="form-label">Nama Ibu</label>
                                            <input type="text" class="form-control" name="nama_ibu" value="{{ $data_pasien->nama_ibu }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal Lahir Ibu</label>
                                            <input type="text" class="form-control" name="tgl_lahir_ibu" value="{{ $data_pasien->tgl_lahir_ibu }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Pendidikan Ibu</label>
                                            <input type="text" class="form-control" name="pendidikan_ibu" value="{{ $data_pasien->pendidikan_ibu }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Pekerjaan Ibu</label>
                                            <input type="text" class="form-control" name="pekerjaan_ibu" value="{{ $data_pasien->pekerjaan_ibu }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Penghasilan Ibu</label>
                                            <input type="text" class="form-control" name="penghasilan_ibu" value="{{ $data_pasien->penghasilan_ibu }}"
                                                readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Alamat Ibu</label>
                                            <textarea class="form-control" name="alamat_ibu" readonly>{{ $data_pasien->alamat_ibu }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
@endsection

