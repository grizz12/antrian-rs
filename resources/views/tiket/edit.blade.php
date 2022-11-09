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
                        <form action="{{ route('tiket.update', $tiket->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Pilih Jaminan</label>
                                <select class="form-select @error('pinjaman') is-invalid @enderror" name="pinjaman" value="{{ $tiket->pinjaman }}">
                                    <option selected disabled>Pilih Jaminan Pasien</option>
                                    <option value="JKN">JKN</option>
                                    <option value="UMUM">UMUM</option>
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
                                    <option value="Poliklinik Epilepsi">Poliklinik Epilepsi</option>
                                    <option value="Poliklinik Neurologi Umum">Poliklinik Neurologi Umum</option>
                                    <option value="Poliklinik Neurovaskular">Poliklinik Neurovaskular</option>
                                </select>
                                @error('poli')
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
                                <label class="form-label">Pilih Data Siswa</label>
                                <select name="id_data_pasien" class="form-control @error('id_data_pasien') is-invalid @enderror"
                                    readonly>
                                    @foreach ($data_pasien as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $tiket->id_data_pasien ? 'selected' : '' }}>
                                            {{ $data->no_rekam }}
                                        </option>
                                    @endforeach
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
                                    <a href="{{ route('tiket.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection