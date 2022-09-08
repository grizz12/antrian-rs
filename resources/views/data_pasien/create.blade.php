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
                        <form action="{{ route('data_pasien.store') }}" method="post">
                            @csrf
                            <div class="row">

                                <!-- Column 1 -->
                                <div class="col-sm">
                                    <div class="mb-3">
                                        <label for="">No.rekam Medis</label>
                                        <input type="number" name="no_rekam" placeholder="Masukan No.Rekam Medis" class="form-control @error('no_rekam') is-invalid @enderror">
                                        @error('no_rekam')
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
                                        <label for="">Tanggal Lahir</label>
                                        <input type="date" name="tgl_lahir" class="form-control @error('tgl_lahir') is-invalid @enderror">
                                        @error('tgl_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Umur</label>
                                        <input type="number" name="umur" placeholder="Masukan Umur" class="form-control @error('umur') is-invalid @enderror">
                                        @error('umur')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">No.Telephone</label>
                                        <input type="no_tlp" name="no_tlp" placeholder="Masukan No.Telephone" class="form-control @error('no_tlp') is-invalid @enderror">
                                        @error('no_tlp')
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
                                </div>

                                <!-- Column 2 -->
                                <div class="col-sm">
                                    <div class="mb-3">
                                        <label for="">Nama Orang Tua</label>
                                        <input type="text" name="nama_orang_tua" placeholder="Masukan Nama Orang Tua" class="form-control @error('nama_orang_tua') is-invalid @enderror">
                                        @error('nama_orang_tua')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="">Alamat Orang Tua</label>
                                        <textarea type="text"name="alamat_orang_tua" placeholder="Masukan Alamat Orang Tua" class="form-control @error('alamat_orang_tua') is-invalid @enderror"></textarea>
                                        @error('alamat_orang_tua')
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
                                        <label class="form-label">Status Nikah</label>
                                        <select class="form-select @error('status') is-invalid @enderror" name="status">
                                            <option selected disabled>Status Anda</option>
                                            <option value="SudahMenikah">Sudah Menikah</option>
                                            <option value="BelumMenikah">Belum Menikah</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
        
                                    <div class="mb-3">
                                        <label class="form-label">Jenis Kelamin</label>
                                        <div class="form-check">
                                            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                                type="radio" name="jenis_kelamin" value="Laki-laki">
                                            <label class="form-check-label">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                                type="radio" name="jenis_kelamin" value="Perempuan">
                                            <label class="form-check-label">
                                                Perempuan
                                            </label>
                                        </div>
                                        @error('jenis_kelamin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <div class="d-grid gap-2 d-md-block">
                                            <button class="btn btn-primary" type="submit">Save</button>
                                            <a href="{{ route('data_pasien.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                                        </div>
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