<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'tikets';

    protected $fillable = ['pinjaman','poli','waktu_kunjungan','tgl_kunjungan','dokter','id_data_pasien'];
    public $timestamps = true;

    public function DataPasien()
    {
        return $this->belongsTo(DataPasien::class,'id_data_pasien');
    }
    public function User()
    {
       return $this->belongsTo(User::class,'id_user');
    }
}
