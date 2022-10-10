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
    <small style="float: right;">Tgl-Kunjungan : {{$tiket->tgl_kunjungan}}</small>
    <h1><b>Tiket Reservasi</b></h1>
        <h2>Nomor Antrian Anda : <br>
            {{ $tiket->id }}   
        </h2>
         <h2>Nomor Rekam Medis Anda : <br>
            {{ $tiket->DataPasien['no_rekam'] }}
        </h2>  
    </fieldset>   
 </body>
 </html>