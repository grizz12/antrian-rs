<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
    use HasFactory;
    protected $table = 'data_pasiens';
    
    protected $fillable = [
        'no_rekam',
        'nama',
        'tmp_lahir',
        'tgl_lahir',
        'pendidikan',
        'nik',
        'gol_darah',
        'alergi',
        'keterangan_alergi',
        'no_tlp',
        'alamat',
        'kec',
        'kota',
        'pekerjaan',
        'agama',
        'status',
        'jenis_kelamin',
        'pilih_orang_tua',
        'nama_orang_tua',
        'tgl_lahir_orang_tua',
        'alamat_orang_tua',
        'pekerjaan_orang_tua',
        'penghasilan_orang_tua',
        'pendidikan_orang_tua', 
    ];
    public $timestamps = true;

    
    public function Tiket()
    {
        return $this->hasOne(Tiket::class, 'id_data_pasien');
    }
}
