 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesan Tiket</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
 </head>
 <body>

    {{-- <style>
        .card{
            align:center;
        }
    
        .text-body{
            text-align: left;
        }
    
        
    
    </style> --}}

    <div class="card border-dark" style="width: 40rem;height: 30rem;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <table>
                        <tr>
                            <td> <img src="{{public_path('/images/PIKSI.png') }}" alt="Piksi Ganesha" height="85" width="85"></td>
                            <td>&nbsp;&nbsp;&nbsp;</td>
                            <td>
                                <h1><b>Tiket Reservasi</b></h1>
                                <small>Pendaftaran Pasien Rawat Jalan Piksi Hospital</small></td>
                        </tr>
                    </table>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <small style="float:right">Tgl Kunjungan : {{$tiket->tgl_kunjungan}}</small><br>
                        <small style="float:right">Jam Kunjungan : {{$tiket->waktu_kunjungan}}</small>
                        <h2>Nomor Antrian Anda : <br>
                            {{ $tiket->id }}   
                        </h2>
                        <h2>Nomor Rekam Medis Anda : <br>
                            {{ $tiket->DataPasien['no_rekam'] }}
                        </h2>   
                        <h2>Nama Dokter Anda : <br>
                            {{ $tiket->dokter }}
                        </h2> 
                    </div>
                    {{-- <div class="col-6">
                        <small style="float:right">Tgl Kunjungan : {{$tiket->tgl_kunjungan}}</small><br>
                        <small style="float:right">Jam Kunjungan : {{$tiket->waktu_kunjungan}}</small>
                    </div> --}}
                </div>  
                <div class="card border-dark">
                    <div class="card-body">
                        <small class="card-text">
                            Catatan :<br>
                            Jika Anda Sudah Mencetak Tiket Ini,Datang Ke Resepsionis Piksi Hospital
                        </small>
                    </div>
                </div>
            </div> 
        </div>  
    </div>



 </body>
 </html>