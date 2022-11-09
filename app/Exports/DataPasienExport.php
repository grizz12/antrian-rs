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
            'No',
            'NO.RM',
            'Nama Pasien',
            'Tanggal Lahir',
            'Umur',
            'No.Telepone',
            'Alamat',
            'Kecamatan',
            'KOTA/KABUPATEN',
            'Nama Orang Tua',
            'Alamat Orang Tua',
            'Pekerjaan',
            'Agama',
            'Status Nikah',
            'Jenis Kelamin',            

        ];
    }
}
