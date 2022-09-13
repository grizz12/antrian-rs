<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
    use HasFactory;
    protected $table = 'data_pasiens';
    
    public $fillable = [
        'no_rekam','nama','tgl_lahir','umur','no_tlp','alamat','kec','kota','nama_orang_tua',
        'alamat_orang_tua','pekerjaan','agama','status','jenis_kelamin'];
    public $timestamps = true;

    
    public function Tiket()
    {
        return $this->hasOne(Tiket::class, 'id_data_pasien');
    }
}
