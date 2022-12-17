@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                <center>
                    {{-- <h1><b>{{ $title }}</b></h1> --}}
                </center>
                <div class="card border-secondary">
                    <div class="card-body">
                        <div class="card">
                            <div class="card-body">
                                <h4><b> Informasi Detail Pasien</b></h4>
                                <form action="{{ route('data_pasien.store') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <!-- Column 1 -->
                                        <div class="col-sm">
                                            <div class="mb-3">
                                                <label for="">No.rekam Medis</label>
                                                <input type="number" name="no_rekam" placeholder="" class="form-control @error('no_rekam') is-invalid @enderror" value="<?php echo $no_rm; ?>">
                                                @error('no_rekam')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Tanggal Pengisian</label>
                                                <input type="date" name="tgl" class="form-control @error('tgl') is-invalid @enderror">
                                                @error('tgl')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="">NIK</label>
                                                <input type="text" name="nik" placeholder="Masukan NIK Anda" class="form-control @error('nik') is-invalid @enderror">
                                                @error('nik')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="">Nama Pasien</label>
                                                <input type="text" name="nama" placeholder="Masukan Nama Lengkap" class="form-control @error('nama') is-invalid @enderror">
                                                @error('nama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">Tempat Lahir</label>
                                                <input type="text" name="tmp_lahir" placeholder="Masukan Tempat Lahir" class="form-control @error('tmp_lahir') is-invalid @enderror">
                                                @error('tmp_lahir')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">Tanggal Lahir</label>
                                                <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                                                @error('tgl_lahir')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Jenis Kelamin</label>
                                                <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                                @error('jenis_kelamin')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label class="form-label">Agama</label>
                                                <select class="form-select @error('agama') is-invalid @enderror" name="agama">
                                                    <option selected disabled>Pilih Agama</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Konghucu">Konghucu</option>
                                                    <option value="Katolik">Katolik</option>
                                                </select>
                                                @error('agama')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">No.Tlp</label>
                                                <input type="text" name="no_tlp" placeholder="Masukan No.Telephone" class="form-control @error('no_tlp') is-invalid @enderror">
                                                @error('no_tlp')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Pendidikan</label>
                                                <select class="form-select @error('pendidikan') is-invalid @enderror" name="pendidikan">
                                                    <option selected disabled>Pendidikan Anda</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA/SMK">SMA/SMK</option>
                                                    <option value="PERGURUAN TUNGGI">PERGURUAN TINGGI</option>
                                                </select>
                                                @error('pendidikan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
        
                                           
                                        </div>
        
                                        <!-- Column 2 -->
                                        <div class="col-sm">
                                            <div class="mb-3">
                                                <label class="form-label">Status Nikah</label>
                                                <select class="form-select @error('status') is-invalid @enderror" name="status">
                                                    <option selected disabled>Status Anda</option>
                                                    <option value="Sudah Menikah">Sudah Menikah</option>
                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                </select>
                                                @error('status')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="">Alamat</label>
                                                <textarea type="text"name="alamat" placeholder="Masukan Alamat Anda" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                                                @error('alamat')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Kecamatan</label>
                                                <input type="text" name="kec" placeholder="Masukan Kecamatan" class="form-control @error('kec') is-invalid @enderror">
                                                @error('kec')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="">Kota/Kabupaten</label>
                                                <input type="text" name="kota" placeholder="KOTA/KABUPATEN" class="form-control @error('kota') is-invalid @enderror">
                                                @error('kota')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Pekerjaan</label>
                                                <select class="form-select @error('pekerjaan') is-invalid @enderror" name="pekerjaan">
                                                    <option selected disabled>Pilih Pekerjaan</option>
                                                    <option value="Peg.Negri">Peg.Negri</option>
                                                    <option value="Peg.Swasta">Peg.Swasta</option>
                                                    <option value="Mahasiswa">Mahasiswa</option>
                                                    <option value="TidakBekerja">Tidak Bekerja</option>
                                                </select>
                                                @error('pekerjaan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Golongan Darah </label>
                                                <select class="form-select @error('gol_darah') is-invalid @enderror" name="gol_darah">
                                                    <option selected disabled>Pilih Golongan Darah</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="O">O</option>
                                                    <option value="AB">AB</option>
                                                </select>
                                                @error('gol_darah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Mempunyai Alergi</label>
                                                <select class="form-select @error('alergi') is-invalid @enderror" name="alergi">
                                                    <option selected disabled>YA/TIDAK</option>
                                                    <option value="YA">YA</option>
                                                    <option value="TIDAK">TIDAK</option>
                                                </select>
                                                @error('alergi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">Keterangan Alergi</label>
                                                <textarea type="text"name="keterangan_alergi" placeholder="Sebutkan Keterangan Alergi Anda" class="form-control @error('keterangan_alergi') is-invalid @enderror"></textarea>
                                                <small>*Jika Tidak Ada Alergi Ketik Tidak Ada </small>
                                                @error('keterangan_alergi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                            <div class="card">
                                <div class="card-body">
                                    <h4><b>Informasi Detail Orang Tua</b></h4>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm">
                                            <h4 align="center">Ayah</h4>
        
                                            <div class="mb-3">
                                                <label for="">Nama Ayah</label>
                                                <input type="text" name="nama_ayah" placeholder="Masukan Nama Ayah" class="form-control @error('nama_ayah') is-invalid @enderror">
                                                @error('nama_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">Tanggal Lahir Ayah</label>
                                                <input type="date" name="tgl_lahir_ayah" class="form-control @error('tgl_lahir_ayah') is-invalid @enderror">
                                                @error('tgl_lahir_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Pendidikan Ayah</label>
                                                <select class="form-select @error('pendidikan_ayah') is-invalid @enderror" name="pendidikan_ayah">
                                                    <option selected disabled>Pendidikan Ayah</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA/SMK">SMA/SMK</option>
                                                    <option value="PERGURUAN TUNGGI">PERGURUAN TINGGI</option>
                                                </select>
                                                @error('pendidikan_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Pekerjaan Ayah</label>
                                                <select class="form-select @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah">
                                                    <option selected disabled>Pilih Pekerjaan</option>
                                                    <option value="Peg.Negri">Peg.Negri</option>
                                                    <option value="Peg.Swasta">Peg.Swasta</option>
                                                    <option value="Mahasiswa">Mahasiswa</option>
                                                    <option value="TidakBekerja">Tidak Bekerja</option>
                                                </select>
                                                @error('pekerjaan_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">Penghasilan Ayah</label>
                                                <input type="text" name="penghasilan_ayah" placeholder="Masukan Penghasilan Ayah" class="form-control @error('penghasilan_ayah') is-invalid @enderror">
                                                @error('penghasilan_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">Alamat Ayah</label>
                                                <textarea type="text"name="alamat_ayah" placeholder="Masukan Alamat Ayah" class="form-control @error('alamat_ayah') is-invalid @enderror"></textarea>
                                                @error('alamat_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <h4 align="center">Ibu</h4>
        
                                            <div class="mb-3">
                                                <label for="">Nama Ibu</label>
                                                <input type="text" name="nama_ibu" placeholder="Masukan Nama Ibu" class="form-control @error('nama_ibu') is-invalid @enderror">
                                                @error('nama_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">Tanggal Lahir Ibu</label>
                                                <input type="date" name="tgl_lahir_ibu" class="form-control @error('tgl_lahir_ibu') is-invalid @enderror">
                                                @error('tgl_lahir_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Pendidikan Ibu</label>
                                                <select class="form-select @error('pendidikan_ibu') is-invalid @enderror" name="pendidikan_ibu">
                                                    <option selected disabled>Pendidikan Ibu</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA/SMK">SMA/SMK</option>
                                                    <option value="PERGURUAN TUNGGI">PERGURUAN TINGGI</option>
                                                </select>
                                                @error('pendidikan_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Pekerjaan Ibu</label>
                                                <select class="form-select @error('pekerjaan_ibu') is-invalid @enderror" name="pekerjaan_ibu">
                                                    <option selected disabled>Pilih Pekerjaan</option>
                                                    <option value="Peg.Negri">Peg.Negri</option>
                                                    <option value="Peg.Swasta">Peg.Swasta</option>
                                                    <option value="Mahasiswa">Mahasiswa</option>
                                                    <option value="TidakBekerja">Tidak Bekerja</option>
                                                </select>
                                                @error('pekerjaan_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">Penghasilan Ibu</label>
                                                <input type="text" name="penghasilan_ibu" placeholder="Masukan Penghasilan Ibu" class="form-control @error('penghasilan_ibu') is-invalid @enderror">
                                                @error('penghasilan_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">Alamat Ibu</label>
                                                <textarea type="text"name="alamat_ibu" placeholder="Masukan Alamat Ibu" class="form-control @error('alamat_ibu') is-invalid @enderror"></textarea>
                                                @error('alamat_ibu')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2 d-md-block">
                                    <button class="btn btn-primary" href="{{ route('tiket.create') }}" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection