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
        'tgl',
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
        'nama_ayah',
        'tgl_lahir_ayah',
        'alamat_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'pendidikan_ayah', 

        'nama_ibu',
        'tgl_lahir_ibu',
        'alamat_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'pendidikan_ibu',
    ];
    public $timestamps = true;

    
    public function Tiket()
    {
        return $this->hasOne(Tiket::class, 'id_data_pasien');
    }
    public function User()
    {
       return $this->belongsTo(User::class,'id_user');
    }
}
