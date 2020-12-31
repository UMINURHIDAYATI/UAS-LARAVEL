<?php

use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku::insert([
            [
              'id'  			=> 1,
              'judul'  			=> 'Belajar Pemrograman Html',
              'isbn'			=> '8745739433',
              'pengarang' 		=> 'Zailani',
              'penerbit'		=> 'Mediakom',
              'tahun_terbit'	=> 2018,
              'jumlah_buku'		=> 20,
              'deskripsi'		=> 'Buku Pertama Belajar Pemrograman Web Utk Pemula',
              'lokasi'			=> 'rak1',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'judul'  			=> 'Pemrograman Android',
              'isbn'			=> '8846374833',
              'pengarang' 		=> 'Rini Wulandari',
              'penerbit'		=> 'PT. Restu Guru',
              'tahun_terbit'	=> 2015,
              'jumlah_buku'		=> 14,
              'deskripsi'		=> 'Jurus Rahasia Menguasai Pemrograman Android',
              'lokasi'			=> 'rak2',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],

        ]);
    }
    
}
