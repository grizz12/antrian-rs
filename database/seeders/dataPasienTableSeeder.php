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
            [
                'no_rekam'=> 1001,
                'nama' => 'Danang Adity',
                'tmp_lahir'=>'Bandung',
                'tgl_lahir'=>'2005-04-12',
                'pendidikan' => 'S3',
                'nik' => '10000020202011',
                'gol_darah'=>'A',
                'alergi'=>'YA',
                'keterangan_alergi'=>'',
                'no_tlp'=>'090809786387253',
                'alamat'=>'Bandung',
                'kec'=>'Regol',
                'kota'=>'KOTA BANDUNG',
                'pekerjaan'=>'Tidak Bekerja',
                'agama'=>'Islam',
                'status'=>'Sudah Menikah',
                'jenis_kelamin'=>'Laki-laki',
                'pilih_orang_tua'=>'Ayah',
                'nama_orang_tua'=>'asep',
                'tgl_lahir_orang_tua'=>'1978-05-12',
                'alamat_orang_tua'=>'Bandung',
                'pekerjaan_orang_tua'=>'Peg.Negri',
                'penghasilan_orang_tua'=>'10000000',
                'pendidikan_orang_tua'=>'S3',
        ],
        ];
        DB::table('data_pasiens')->insert($data_pasien);
    }
}
