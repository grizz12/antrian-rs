 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesan Tiket</title>
 </head>
 <body>
    <fieldset>
        <div class="row">
            <div class="col-md-auto">
                <img src="{{asset('images')}}/PIKSI.png" alt="Piksi Ganesha" height="60" width="60">
            </div>
            <div class="col-md-auto">
                <h1><b>Tiket Reservasi</b></h1>
                <small>Pendaftaran Pasien Rawat Jalan Piksi Hospital</small>
            </div>
        </div>
        <small style="float: right;">Tgl-Kunjungan : {{$tiket->tgl_kunjungan}}</small><br>
        <small style="float: right;">Jam-Kunjungan : {{$tiket->waktu_kunjungan}}</small>
            <div class="text-body" style="float: left">
                <br>
                    <h3>Nomor Antrian Anda : <br>
                        {{ $tiket->id }}   
                    </h3>
                    <br>
                    <h3>Nomor Rekam Medis Anda : <br>
                        {{ $tiket->DataPasien['no_rekam'] }}
                    </h3>   
                    <br>
                    <h3>Nama Dokter Anda : <br>
                        {{ $tiket->dokter }}
                    </h3>
                    <br>
                    </h2>
                </div>
            </div>  
    </fieldset>   
 </body>
 </html>