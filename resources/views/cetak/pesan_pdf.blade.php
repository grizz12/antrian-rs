 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesan Tiket</title>
 </head>
 <body>
        <div class="card" style="width: 35rem;height: 20rem ; border:1px">
            <div class="card-body">
                <h1><b>Tiket Reservasi</b></h1>
                <br>
                <h2>Nomor Antrian Anda : <br>
                    {{ $tiket->id }}   
                </h2>
                <h2>Nomor Rekam Medis Anda : <br>
                    {{ $tiket->DataPasien['no_rekam'] }}
                </h2>   
            </div>           
        </div>  
 </body>
 </html>