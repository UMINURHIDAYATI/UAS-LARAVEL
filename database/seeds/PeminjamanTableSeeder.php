<?php

use Illuminate\Database\Seeder;

class PeminjamanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Peminjaman::insert([
            [
              'id'  			=> 1,
              'kode'			=> 'T0001',
              'buku'	        => 'java',
              'peminjam' 		=> 'Santi',
              'prodi' 			=> 'MI',
              'tgl_pinjam'		=> '2020-11-01',
              'tgl_kembali'		=> '2020-11-07',
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
                'created_at'    => \Carbon\Carbon::now(),
                'updated_at'    => \Carbon\Carbon::now()
            ],
        ]);
    }
}
