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
                        <h4><b>Informasi Detail Kunjungan & Tiket </b></h4>
                        <div class="card">
                            <div class="card-body">
                                <table>
                                    <tr>
                                        <td>Jaminan</td>
                                        <td>:</td>
                                        <td>{{ $tiket->pinjaman }}</td>
                                    </tr>
                                    <tr>
                                        <td>Poliklinik Yang Dituju</td>
                                        <td>:</td>
                                        <td>{{ $tiket->poli }}</td>
                                    </tr>
                                    <tr>
                                        <td>Waktu Kunjungan</td>
                                        <td>:</td>
                                        <td>{{ $tiket->waktu_kunjungan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Kunjungan</td>
                                        <td>:</td>
                                        <td>{{ $tiket->tgl_kunjungan }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Dokter</td>
                                        <td>:</td>
                                        <td>{{ $tiket->dokter }}</td>
                                    </tr>
                                    <tr>
                                        <td>No.Rekam Medis</td>
                                        <td>:</td>
                                        <td>{{ $tiket->DataPasien['no_rekam'] }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div> 
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                {{-- <a href="{{ route('pesan.show')}}" class="btn btn-primary" type="submit">Pesan Tiket</a> --}}
                                <a href="/tiket-edit/{{auth()->user()->id}}" class="btn btn-primary" type="submit">Edit</a>
                                <a href="/home" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection