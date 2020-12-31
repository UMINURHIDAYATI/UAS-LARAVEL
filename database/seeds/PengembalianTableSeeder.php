<?php

use Illuminate\Database\Seeder;

class PengembalianTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Pengembalian::insert([
            [
              'id'  			=> 1,
              'kode'			=> 'T0001',
              'buku'	        => 'java',
              'peminjam' 		=> 'Santi',
              'prodi' 			=> 'TI',
              'tgl_pinjam'		=> '2020-11-01',
              'tgl_kembali'		=> '2020-11-07',
              'denda'           =>'0',
              'status'          =>'Sudah Kembali',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
                'id'  			=> 2,
                'kode'			=> 'T0002',
                'buku'	        => 'android',
                'peminjam' 		=> 'Umi',
                'prodi' 		=> 'MI',
                'tgl_pinjam'	=> '2020-12-01',
                'tgl_kembali'	=> '2020-12-07',
                'denda'         =>'0',
                'status'          =>'Belum Kembali',
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now()
            ],
        ]);
    }
}
