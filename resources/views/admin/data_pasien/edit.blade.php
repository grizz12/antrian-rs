@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                {{-- <center>
                    <h1><b>{{ $title }}</b></h1>
                </center> --}}
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('data_pasien.update', $data_pasien->id) }}" method="post">
                            @csrf
                            @method('put')

                           <div class="card">
                            <div class="card-body">
                                <h4><b>Informasi Detail Pasien</b></h4>
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
                                            <label class="form-label">Tanggal Lahir</label>
                                            <input type="date" class="form-control  @error('tgl') is-invalid @enderror"
                                                name="tgl" value="{{ $data_pasien->tgl }}">
                                            @error('tgl')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">NIK</label>
                                            <input type="text" class="form-control  @error('nik') is-invalid @enderror"
                                                name="nik" value="{{ $data_pasien->nik }}">
                                            @error('nik')
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
                                            <label class="form-label">Tempat Lahir</label>
                                            <input type="text" class="form-control  @error('tmp_lahir') is-invalid @enderror"
                                                name="tmp_lahir" value="{{ $data_pasien->nama }}">
                                            @error('tmp_lahir')
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
                                            <label class="form-label">Jenis Kelamin</label>
                                            <select class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                                <option value="Laki_laki" {{ $data_pasien->jenis_kelamin == 'Laki_laki' ? 'selected' : '' }}>Laki_laki</option>
                                                <option value="Perempuan" {{ $data_pasien->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
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
                                            <label class="form-label">No.Telephone</label>
                                            <input type="number" class="form-control  @error('no_tlp') is-invalid @enderror"
                                                name="no_tlp" value="{{ $data_pasien->no_tlp }}">
                                            @error('no_tlp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label">Pendidikan</label>
                                            <select class="form-select @error('pendidikan') is-invalid @enderror" name="pendidikan">
                                                <option value="SD" {{ $data_pasien->pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
                                                <option value="SMP" {{ $data_pasien->pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
                                                <option value="SMA/SMK" {{ $data_pasien->pendidikan == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                                                <option value="PERGURUAN TINGGI" {{ $data_pasien->pendidikan == 'PERGURUAN TINGGI' ? 'selected' : '' }}>PERGURUAN TINGGI</option>
                                                </option>
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
                                            <select class="form-select @error('status') is-invalid @enderror" name="status" value="{{ $data_pasien->status }}">
                                                <option selected>Status Anda</option>
                                                <option value="SudahMenikah"  {{ $data_pasien->status == 'SudahMenikah' ? 'selected' : '' }}>Sudah Menikah</option>
                                                <option value="BelumMenikah"  {{ $data_pasien->status == 'BelumMenikah' ? 'selected' : '' }}>Belum Menikah</option>
                                            </select>
                                            @error('status')
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
                                            <label class="form-label">Golongan Darah</label>
                                            <select class="form-select @error('gol_darah') is-invalid @enderror" name="gol_darah">
                                                <option value="A" {{ $data_pasien->gol_darah == 'A' ? 'selected' : '' }}>A</option>
                                                <option value="B" {{ $data_pasien->gol_darah == 'B' ? 'selected' : '' }}>B</option>
                                                <option value="O" {{ $data_pasien->gol_darah == 'O' ? 'selected' : '' }}>O</option>
                                                <option value="AB" {{ $data_pasien->gol_darah == 'AB' ? 'selected' : '' }}>AB</option>
                                                </option>
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
                                                <option value="YA" {{ $data_pasien->alergi == 'YA' ? 'selected' : '' }}>YA</option>
                                                <option value="TIDAK" {{ $data_pasien->alergi == 'TIDAK' ? 'selected' : '' }}>TIDAK</option>
                                                </option>
                                            </select>
                                            @error('alergi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
    
                                        <div class="mb-3">
                                            <label class="form-label">Keterangan Alergi</label>
                                            <textarea type="text"name="keterangan_alergi" value="{{ $data_pasien->keterangan_alergi }}" class="form-control @error('keterangan_alergi') is-invalid @enderror"></textarea>
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
                                                <label class="form-label">Nama Ayah</label>
                                                <input type="text" class="form-control  @error('nama_orang_tua') is-invalid @enderror"
                                                    name="nama_orang_tua" value="{{ $data_pasien->nama_orang_tua }}">
                                                @error('nama_orang_tua')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Lahir Ayah</label>
                                                <input type="date" class="form-control  @error('tgl_lahir_orang_tua') is-invalid @enderror"
                                                    name="tgl_lahir_orang_tua" value="{{ $data_pasien->tgl_lahir_orang_tua }}">
                                                @error('tgl_lahir_orang_tua')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Pendidikan Ayah</label>
                                                <select class="form-select @error('pendidikan_orang_tua') is-invalid @enderror" name="pendidikan_orang_tua">
                                                    <option value="SD" {{ $data_pasien->pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
                                                    <option value="SMP" {{ $data_pasien->pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
                                                    <option value="SMA/SMK" {{ $data_pasien->pendidikan == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                                                    <option value="PERGURUAN TINGGI" {{ $data_pasien->pendidikan == 'PERGURUAN TINGGI' ? 'selected' : '' }}>PERGURUAN TINGGI</option>
                                                    </option>
                                                </select>
                                                @error('pendidikan_orang_tua')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Pekerjaan Ayah</label>
                                                <select class="form-select @error('pekerjaan_orang_tua') is-invalid @enderror" name="pekerjaan_orang_tua">
                                                    <option value="Peg.Negeri" {{ $data_pasien->pekerjaan_orang_tua == 'Peg.Negeri' ? 'selected' : '' }}>Peg.Negeri</option>
                                                    <option value="Peg.Swasta" {{ $data_pasien->pekerjaan_orang_tua == 'Peg.Swasta' ? 'selected' : '' }}>Peg.Swasta</option>
                                                    <option value="Mahasiswa" {{ $data_pasien->pekerjaan_orang_tua == 'Mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                                                    <option value="TidakBekerja" {{ $data_pasien->pekerjaan_orang_tua == 'TidakBekerja' ? 'selected' : '' }}>TidakBekerja</option>
                                                    </option>
                                                </select>
                                                @error('pekerjaan_orang_tua')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Penghasilan Ayah</label>
                                                <input type="text" class="form-control  @error('penghasilan_orang_tua') is-invalid @enderror"
                                                    name="penghasilan_orang_tua" value="{{ $data_pasien->penghasilan_orang_tua }}">
                                                @error('penghasilan_orang_tua')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">Alamat Ayah</label>
                                                <textarea type="text"name="alamat_orang_tua" placeholder="Masukan Alamat Ayah" class="form-control @error('alamat_orang_tua') is-invalid @enderror"></textarea>
                                                @error('alamat_orang_tua')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                        <div class="col-sm">
                                            <h4 align="center">Ibu</h4>

                                            <div class="mb-3">
                                                <label class="form-label">Nama Ibu</label>
                                                <input type="text" class="form-control  @error('nama_ayah') is-invalid @enderror"
                                                    name="nama_ayah" value="{{ $data_pasien->nama_ayah }}">
                                                @error('nama_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Tanggal Lahir Ibu</label>
                                                <input type="date" class="form-control  @error('tgl_lahir_ayah') is-invalid @enderror"
                                                    name="tgl_lahir_ayah" value="{{ $data_pasien->tgl_lahir_ayah }}">
                                                @error('tgl_lahir_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Pendidikan Ibu</label>
                                                <select class="form-select @error('pendidikan_ayah') is-invalid @enderror" name="pendidikan_ayah">
                                                    <option value="SD" {{ $data_pasien->pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
                                                <option value="SMP" {{ $data_pasien->pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
                                                <option value="SMA/SMK" {{ $data_pasien->pendidikan == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                                                <option value="PERGURUAN TINGGI" {{ $data_pasien->pendidikan == 'PERGURUAN TINGGI' ? 'selected' : '' }}>PERGURUAN TINGGI</option>
                                                    </option>
                                                </select>
                                                @error('pendidikan_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Pekerjaan Ibu</label>
                                                <select class="form-select @error('pekerjaan_ayah') is-invalid @enderror" name="pekerjaan_ayah">
                                                    <option value="Peg.Negeri" {{ $data_pasien->pekerjaan_ayah == 'Peg.Negeri' ? 'selected' : '' }}>Peg.Negeri</option>
                                                    <option value="Peg.Swasta" {{ $data_pasien->pekerjaan_ayah == 'Peg.Swasta' ? 'selected' : '' }}>Peg.Swasta</option>
                                                    <option value="Mahasiswa" {{ $data_pasien->pekerjaan_ayah == 'Mahasiswa' ? 'selected' : '' }}>Mahasiswa</option>
                                                    <option value="TidakBekerja" {{ $data_pasien->pekerjaan_ayah == 'TidakBekerja' ? 'selected' : '' }}>TidakBekerja</option>
                                                    </option>
                                                </select>
                                                @error('pekerjaan_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label class="form-label">Penghasilan Ibu</label>
                                                <input type="text" class="form-control  @error('penghasilan_ayah') is-invalid @enderror"
                                                    name="penghasilan_ayah" value="{{ $data_pasien->penghasilan_ayah }}">
                                                @error('penghasilan_ayah')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
        
                                            <div class="mb-3">
                                                <label for="">Alamat Ibu</label>
                                                <textarea type="text"name="alamat_ayah" placeholder="Masukan Alamat Ibu" class="form-control @error('alamat_ayah') is-invalid @enderror"></textarea>
                                                @error('alamat_ayah')
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
                                    <button class="btn btn-primary" type="submit">Save</button>
                                    <a href="{{ route('admin.data_pasien.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection