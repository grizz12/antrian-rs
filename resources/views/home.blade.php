@extends('layouts.admin')

@section('content')

 <div class="container"> 
  <img src="images/Poster.png" alt="Lights" style="width:100%;">
  <hr>  
  <div class="row justify-content-center">
    {{-- <p align="center" style="font-size: 40px"><b>INFORMASI DATA PASIEN</b></p> --}}
    <br><br><br>
      <div class="col-md-11">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-6 col-6">
          <!-- small box -->
            <div class="small-box text-white" style="background-color: slateblue">
              <div class="inner">
                <h3>{{ $data_pasien }}</h3>
                <p>Daftar Data Pasien Yang Sudah Terdaftar</p>
              </div>
              <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16" style="color: white">
                  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                </svg>
              </div>
              <a href="{{ route('data_pasien.index') }}" class="small-box-footer">Informasi Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
                
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box  text-white" style="background-color: slateblue">
              <div class="inner">
                <h3>{{ $tiket }}</h3>
                <p>Daftar Data Pasien Kunjungan & Tiket</p>
              </div>
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16" style="color: white">
                    <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z"/>
                    <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z"/>
                  </svg>
                </div>
                <a href="{{ route('tiket.index') }}" class="small-box-footer">Informasi Selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>            
      </div> 
  <br><br><br>
      <p align="center" style="font-size: 50px"><b>ABOUT</b></p>
      <div class="row justify-content-center">
        <div class="col-md-11">
          <div class="clearfix">
            {{-- <img src="images/smk-assalaam.png" class="col-md-3 float-md-end mb-3 ms-md-3" alt="Logo SMK ASSSALAAM" > <br> --}}
            <img src="images/piksi ganesha hospital.png" class="col-md-4 float-md-end mb-3 ms-md-3" alt="Logo Piksi Ganesha" >
                <h1><b>Halo,</b></h1>
                <p>Selamat Datang Di Website Kami <b>Piksi Hospital</b>.
                  Disini Kami Melayani Pendaftaran Pasien Rawat Jalan Tiket Secara Online 
                  Untuk Pasien Yang Ingin Mendaftar Di <b>Piksi Hospital</b>.
                  Website Ini Bertujuan Memudahkan Pengguna Agar Dapat Mendaftar Dengan Online.
                  Daftar Terlebih Dahulu Untuk Memesan Tiket!
                </p>
                <a href="{{ route('data_pasien.create') }}" class="btn btn-primary" style="float: left">Daftar Pasien</a>
                <br>
          </div>
        </div>
      </div>
      <br><br><br><br><br>
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
                                    $conn = mysqli_connect('127.0.0.1','root','','piksi_ganesha');
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
                                    $conne = mysqli_connect('127.0.0.1','root','','piksi_ganesha');
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
  
      <br><br><br>
        </div>        
    </div>
  </div>

@endsection

 {{-- <div class="row g-0 bg-white position-relative">
        <div class="col-md-4" >
          <img src="images/piksi ganesha hospital.png" style="width: 400px" alt="...">
        </div>
        <div class="col-md-8">
          <p class="title" style="font-size: 45px"><b>POLITEKNIK PIKSI GANESHA</b></p>
          <p>
            Politeknik Piksi Ganesha Bandung atau Kampus Ungu, adalah perguruan tinggi swasta yang terdapat di kota Bandung, Jawa Barat, Indonesia. 
            Politeknik Piksi Ganesha Bandung berafiliasi dengan Politeknik Dharma Patria Kebumen.Politeknik Piksi Ganesha telah terakreditasi oleh Badan Akreditasi Nasional (BAN) Perguruan Tinggi baik Institusi maupun Program Studi.</p>
          <a href="https://www.piksi.ac.id/" class="stretched-link text-purple">INFORMASI SELENGKAPNYA</a>
        </div>
      </div>
      <br><br><br><br><br> --}}