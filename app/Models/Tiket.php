<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'tikets';

    protected $fillable = ['pinjaman','poli','tgl_kunjungan','id_data_pasien'];
    public $timestamps = true;

    public function data_pasien()
    {
        return $this->belongsTo(DataPasein::class, 'id_data_pasien');
    }
}
