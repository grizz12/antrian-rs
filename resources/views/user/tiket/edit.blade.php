@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts._flash')
                {{-- <center>
                    <h1><b>{{ $title }}</b></h1>
                </center> --}}
                
                    <div class="card">
                        <div class="card-body">
                            <h4><b>Informasi Detail Kunjungan & Tiket </b></h4>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('tiket.update', $tiket->id) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="mb-3">
                                            <label class="form-label">Pilih Jaminan</label>
                                            <select class="form-select @error('pinjaman') is-invalid @enderror" name="pinjaman" value="{{ $tiket->pinjaman }}">
                                                <option selected disabled>Pilih Jaminan Pasien</option>
                                                <option value="JKN"{{ $tiket->pinjaman == 'JKN' ? 'selected' : '' }}>JKN</option>
                                                <option value="UMUM" {{ $tiket->pinjaman == 'UMUM' ? 'selected' : '' }}>UMUM</option>
                                            </select>
                                            @error('pinjaman')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Poliklinik Yang Dituju</label>
                                            <select class="form-select @error('poli') is-invalid @enderror" name="poli" value="{{ $tiket->poli }}">
                                                <option selected disabled>Pilih Poliklinik</option>
                                                <option value="Poliklinik Epilepsi" {{ $tiket->poli == 'Poliklinik Epilepsi' ? 'selected' : '' }}>Poliklinik Epilepsi</option>
                                                <option value="Poliklinik Neurologi Umum" {{ $tiket->poli == 'Poliklinik Neurologi Umum' ? 'selected' : '' }}>Poliklinik Neurologi Umum</option>
                                                <option value="Poliklinik Neurovaskular" {{ $tiket->poli == 'Poliklinik Neurovaskular' ? 'selected' : '' }}>Poliklinik Neurovaskular</option>
                                            </select>
                                            @error('poli')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Waktu Kunjungan</label>
                                            <input type="time" class="form-control  @error('waktu_kunjungan') is-invalid @enderror"
                                                name="waktu_kunjungan" value="{{ $tiket->waktu_kunjungan }}">
                                            @error('waktu_kunjungan')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Tanggal Kunjungan</label>
                                            <input type="date" class="form-control  @error('tgl_kunjungan') is-invalid @enderror"
                                                name="tgl_kunjungan" value="{{ $tiket->tgl_kunjungan }}">
                                            @error('tgl_kunjungan')
                                                  <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="mb-3">
                                            <label class="form-label">Poliklinik Dokter</label>
                                            <select class="form-select @error('dokter') is-invalid @enderror" name="dokter" value="{{ $tiket->dokter }}">
                                                <option selected disabled>Pilih Dokter</option>
                                                <option value="Dr.Afif Maulana" {{ $tiket->dokter == 'Dr.Afif Maulana' ? 'selected' : '' }}> Dr.Afif Maulana</option>
                                                <option value="Dr.Hasan Widjaya" {{ $tiket->dokter == 'Dr.Hasan Widjaya' ? 'selected' : '' }}>Dr.Hasan Widjaya</option>
                                                <option value="Dr.Sandi Hafizh" {{ $tiket->dokter == 'Dr.Sandi Hafizh' ? 'selected' : '' }}>Dr.Sandi Hafizh</option>
                                                <option value="Dr.Weda Karisma" {{ $tiket->dokter == 'Dr.Weda Karisma' ? 'selected' : '' }}>Dr.Weda Karisma</option>
                                                <option value="Dr.Rizki Naif" {{ $tiket->dokter == 'Dr.Rizki Naif' ? 'selected' : '' }}>Dr.Rizki Naif</option>
                                            </select>
                                            @error('dokter')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
            
                                        <div class="mb-3">
                                            <label class="form-label">No.Rekam</label>
                                            <select name="id_data_pasien" class="form-control @error('id_data_pasien') is-invalid @enderror"
                                                readonly disabled>
                                                @foreach ($data_pasien as $data)
                                                @if($data->user->id == Auth::user()->id)
                                                    <option value="{{ $data->id }}"
                                                        {{ $data->id == $tiket->id_data_pasien ? 'selected' : '' }}>
                                                        {{ $data->no_rekam }}
                                                    </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                            </select>
                                            @error('id_data_pasien')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-grid gap-2 d-md-block">
                                                <button class="btn btn-primary" type="submit">Save</button>
                                                <a href="/tiket-show/{{ auth()->user()->id  }}" class="btn btn-primary" type="submit">Kembali</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>  
                        </div>
                    </div>
                
            </div>
        </div>
    </div>
@endsection