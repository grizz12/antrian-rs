<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class dataPasienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_pasien = [
            ['no_rekam' =>1001,
            'nama' => 'Udin Gacor',
            'tgl_lahir' => '2005-05-05',
            'umur' => 27,
            'no_tlp' =>'08765432156',
            'alamat' =>'Jl.Moh Toha No.67',
            'kec' => 'Regol',
            'kota' => 'KOTA BANDUNG',
            'nama_orang_tua' => 'Yusuf Ali',
           'alamat_orang_tua' => 'Jl.Moh Toha No.67',
           'pekerjaan' => 'Peg.Negri',
           'agama' => 'Islam',
           'status' => 'Sudah Menikah',
           'jenis_kelamin' => 'Laki-laki',
        ],
        ];
        DB::table('data_pasiens')->insert($data_pasien);
    }
}
