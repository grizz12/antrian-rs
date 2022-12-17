<?php

namespace App\Exports;

use App\Models\DataPasien;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataPasienExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return DataPasien::all();
    }

    public function headings(): array
    {
        return [
            'no',
            'id_user',
            'no_rekam',
            'nama',
            'tmp_lahir',
            'tgl_lahir',
            'jenis_kelamin',
            'agama',
            'no_tlp',
            'pendidikan',
            'nik',
            'status',
            'alamat',
            'kec',
            'kota',
            'pekerjaan',
            'gol_darah',
            'alergi',
            'keterangan_alergi',
            'nama_ayah',
            'tgl_lahir_ayah',
            'pendidikan_ayah',
            'pekerjaan_ayah',
            'alamat_ayah',
            'penghasilan_ayah', 
            'nama_ibu',
            'tgl_lahir_ibu',
            'pendidikan_ibu', 
            'pekerjaan_ibu',
            'alamat_ibu', 
            'penghasilan_ibu',        

        ];
    }
}
