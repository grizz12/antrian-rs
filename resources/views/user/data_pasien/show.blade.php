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
                                <div class="row">
                                    <div class="col">
                                        <h4><b> Informasi Detail Pasien</b></h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <table>
                                                    <tr>
                                                        <td>No Rekam</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->no_rekam }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Pengisian</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->tgl }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>NIK</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->nik }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->nama }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Tempat</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->tmp_lahir }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tanggal Lahir</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->tgl_lahir }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->jenis_kelamin }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Agama</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->agama }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>No.Telephone</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->no_tlp }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pendidikan</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->pendidikan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Status Nikah</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->status }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->alamat }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kecamatan</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->kec }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kota/Kabupaten</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->kota }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pekerjaan</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->pekerjaan }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Golongan Darah</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->gol_darah }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mempunyai Alergi</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->alergi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Keterangan Alergi</td>
                                                        <td>:</td>
                                                        <td>{{ $data_pasien->keterangan_alergi }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h4><b> Informasi Detail Orang Tua</b></h4>
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 align="center">Ayah</h4>
                                        <table>
                                            <tr>
                                                <td>Nama Ayah</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->nama_ayah }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir Ayah</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->tgl_lahir_ayah }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pendidikan Ayah</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->pendidikan_ayah }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan Ayah</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->pekerjaan_ayah }}</td>
                                            </tr>
                                            <tr>
                                                <td>Penghasilan Ayah</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->penghasilan_ayah }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Ayah</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->alamat_ayah }}</td>
                                            </tr>
                                        </table>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 align="center">Ibu</h4>
                                        <table>
                                            <tr>
                                                <td>Nama Ibu</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->nama_ibu }}</td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir Ibu</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->tgl_lahir_ibu }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pendidikan Ibu</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->pendidikan_ibu }}</td>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan Ibu</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->pekerjaan_ibu }}</td>
                                            </tr>
                                            <tr>
                                                <td>Penghasilan Ibu</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->penghasilan_ibu }}</td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Ibu</td>
                                                <td>:</td>
                                                <td>{{ $data_pasien->alamat_ibu }}</td>
                                            </tr>
                                        </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="/home" class="btn btn-primary" type="submit">Kembali</a>
                                <a href="/pasien-edit/{{ auth()->user()->id  }}" class="btn btn-primary" type="submit">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
