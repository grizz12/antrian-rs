@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                {{-- <center>
                    <h1><b>Input Kunjungan Pasien & Tiket </b></h1>
                </center> --}}
                <a href="{{ route('tiket.create') }}"
                        class="btn btn-primary " style="float: right;">
                        Input Data Pasien
                    </a>
                    <a href="/export/Kunjungan&Tiket" class="btn btn-success " style="float: left;">
                        Export Excel
                    </a>
                    <br><br>
                <div class="card border-secondary">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Jaminan Pembiayaan</th>
                                        <th>Poliklinik Yang Dituju</th>
                                        <th>Tanggal Kunjungan</th>
                                        <th>No.Rekam Medis</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($tiket as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->pinjaman }}</td>
                                            <td>{{ $data->poli }}</td>
                                            <td>{{ $data->tgl_kunjungan }}</td>
                                            <td>{{ $data->DataPasien['no_rekam'] }}</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                <form action="{{ route('tiket.destroy', $data->id) }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <a href="{{ route('pesan.show', $data->id) }}"
                                                        class="btn btn-sm btn-info" style="background-color:green" >
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16" style="color:white;">
                                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 
                                                             2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                                          </svg>
                                                    </a>
                                                    <a href="{{ route('tiket.edit', $data->id) }}"
                                                        class="btn btn-sm btn-warning">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16" style="color: white;"> 
                                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 
                                                            2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 
                                                            0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                          </svg>
                                                    </a> 
                                                    <a href="{{ route('tiket.show', $data->id) }}"
                                                        class="btn btn-sm btn-info">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16" style="color: white;">
                                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                          </svg>
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-danger"
                                                        onclick="return confirm('Are You Sure?')">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0
                                                             0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 
                                                             0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                          </svg>
                                                    </button>
                                                </form>
                                            </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                    <div class="row">
                      <div class="col">
                        <div class="card card-primary" >
                            <div class="card-header">
                              <h3 class="card-title">Jaminan Chart</h3>
                            </div>
                            <div class="card-body">
                              <div class="chart">
                                <canvas id="jaminan" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                              </div>
                            </div>
                            <!-- /.card-body -->
                          </div>
                      </div>
                      <div class="col">
                        <div class="card card-primary" >
                            <div class="card-header">
                              <h3 class="card-title">Poliklinik Chart</h3>
                            </div>
                            <div class="card-body">
                              <div class="chart">
                                <canvas id="poliklinik" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                              </div>
                            </div>
                            <!-- /.card-body -->
                          </div>
                      </div>
                    </div>
                  
               

                
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                {{-- Chart JS Pinjaman --}}
                <script>
                    var ctx = document.getElementById('jaminan').getContext('2d');
                    var jaminan = new Chart(ctx, {
                        type: 'pie',
                        data: {
                            labels: ["Pasien JKN","Pasien UMUM"],
                            datasets: [{
                            
                                data: [    
                                    <?php
                                    $conn = mysqli_connect('localhost','root','','piksi_ganesha');
                                    $jumlah_jkn = mysqli_query($conn, "SELECT pinjaman, pinjaman FROM tikets WHERE pinjaman='JKN'");
                                    echo mysqli_num_rows($jumlah_jkn);
                                    ?>, 
                                    <?php
                                    $jumlah_umum = mysqli_query($conn, "SELECT pinjaman, pinjaman FROM tikets WHERE pinjaman='UMUM'");
                                    echo mysqli_num_rows($jumlah_umum);
                                    ?>, 
                                ],
                                backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                ],
                                borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
        </script>

        <script>
                    var ctx = document.getElementById('poliklinik').getContext('2d');
                    var poliklinik = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: ["Poliklinik Epilepsi","Poliklinik Neurologi Umum","Poliklinik Neurovaskular"],
                            datasets: [{
                            
                                data: [    
                                    <?php
                                    $conne = mysqli_connect('localhost','root','','piksi_ganesha');
                                    $jumlah_epilepsi = mysqli_query($conne, "SELECT poli, poli FROM tikets WHERE poli='Poliklinik_Epilepsi'");
                                    echo mysqli_num_rows($jumlah_epilepsi);
                                    ?>, 
                                    <?php
                                    $jumlah_neurologi = mysqli_query($conne, "SELECT poli, poli FROM tikets WHERE poli='Poliklinik_Neurologi_Umum'");
                                    echo mysqli_num_rows($jumlah_neurologi);
                                    ?>, 
                                    <?php
                                    $jumlah_neurovaskular = mysqli_query($conne, "SELECT poli, poli FROM tikets WHERE poli='Poliklinik_Neurovaskular'");
                                    echo mysqli_num_rows($jumlah_neurovaskular);
                                    ?>,
                                ],
                                backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                ],
                                borderColor: [
                                'rgba(255,99,132,1)',
                                'rgba(54, 162, 235, 1)',
                                'rgb(153, 102, 255)',
                                ],
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
            </script>
  

      </div>
    </div>
@endsection


