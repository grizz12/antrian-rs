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
                        <form action="{{ route('data_pasien.update', $data_pasien->id) }}" method="post">
                            @csrf
                            @method('put')

                            <div class="row">
                                <!-- Column 1 -->
                                <div class="col-sm">
                                    <div class="mb-3">
                                        <label class="form-label">No Rekam Medis</label>
                                        <input type="number" class="form-control  @error('no_rekam') is-invalid @enderror"
                                            name="no_rekam" value="{{ $data_pasien->no_rekam }}">
                                        @error('no_rekam')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Nama</label>
                                        <input type="text" class="form-control  @error('nama') is-invalid @enderror"
                                            name="nama" value="{{ $data_pasien->nama }}">
                                        @error('nama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal Lahir</label>
                                        <input type="date" class="form-control  @error('tgl_lahir') is-invalid @enderror"
                                            name="tgl_lahir" value="{{ $data_pasien->tgl_lahir }}">
                                        @error('tgl_lahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Umur</label>
                                        <input type="number" class="form-control  @error('umur') is-invalid @enderror"
                                            name="umur" value="{{ $data_pasien->umur }}">
                                        @error('umur')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="form-label">No. Telephone</label>
                                        <input type="number" class="form-control  @error('no_tlp') is-invalid @enderror"
                                            name="no_tlp" value="{{ $data_pasien->no_tlp }}">
                                        @error('no_tlp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Alamat</label>
                                        <textarea type="text"name="alamat" placeholder="Masukan Alamat Anda" value="{{ $data_pasien->alamat }}" class="form-control @error('alamat') is-invalid @enderror"></textarea>
                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Kecamatan</label>
                                        <input type="text" class="form-control  @error('kec') is-invalid @enderror"
                                            name="kec" value="{{ $data_pasien->kec }}">
                                        @error('kec')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Kota/Kabupaten</label>
                                        <input type="text" class="form-control  @error('kota') is-invalid @enderror"
                                            name="kota" value="{{ $data_pasien->kota }}">
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
                                        <label class="form-label">Nama Orang Tua</label>
                                        <input type="text" class="form-control  @error('nama_orang_tua') is-invalid @enderror"
                                            name="nama_orang_tua" value="{{ $data_pasien->nama_orang_tua }}">
                                        @error('nama_orang_tua')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Alamat Orang Tua</label>
                                        <textarea type="text"name="alamat_orang_tua"  value="{{ $data_pasien->alamat_orang_tua }}" class="form-control @error('alamat_orang_tua') is-invalid @enderror"></textarea>
                                        @error('alamat_orang_tua')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Pekerjaan</label>
                                        <select class="form-select @error('pekerjaan') is-invalid @enderror" name="pekerjaan">
                                            <option value="Peg.Negeri" {{ $data_pasien->pekerjaan == 'Peg.Negeri' ? 'selected' : '' }}>Peg.Negeri</option>
                                            <option value="Peg.Swasta" {{ $data_pasien->pekerjaan == 'Peg.Swasta' ? 'selected' : '' }}>Peg.Swasta</option>
                                            <option value="Mahasiswa" {{ $data_pasien->pekerjaan == 'Mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                                            <option value="TidakBekerja" {{ $data_pasien->pekerjaan == 'TidakBekerja' ? 'selected' : '' }}>TidakBekerja</option>
                                            </option>
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
                                            <option value="Islam" {{ $data_pasien->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                            <option value="Kristen" {{ $data_pasien->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                                            <option value="Budha" {{ $data_pasien->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                            <option value="Konghucu" {{ $data_pasien->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                                            <option value="Katolik" {{ $data_pasien->agama == 'Katolik' ? 'selected' : '' }}>Katolik
                                            </option>
                                        </select>
                                        @error('agama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Status Nikah</label>
                                        <select class="form-select @error('status') is-invalid @enderror" name="status" value="{{ $data_pasien->status }}">
                                            <option selected>Status Anda</option>
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
                                                type="radio" name="jenis_kelamin" value="Laki-laki"
                                                @if ($data_pasien->jenis_kelamin == 'Laki-laki') checked @endif>
                                            <label class="form-check-label">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                                                type="radio" name="jenis_kelamin" value="Perempuan"
                                                @if ($data_pasien->jenis_kelamin == 'Perempuan') checked @endif>
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