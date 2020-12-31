<?php

use Illuminate\Database\Seeder;

class AnggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota::insert([
            [
              'id'  			=> 1,
              'nomor_induk'				=> 200003,
              'nama' 			=> 'Asyla',
              'tempat_lahir'	=> 'Banjarmasin',
              'tgl_lahir'		=> '2016-01-01',
              'jk'				=> 'L',
              'prodi'			=> 'TI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
            [
              'id'  			=> 2,
              'nomor_induk'				=> 200034,
              'nama' 			=> 'Santi',
              'tempat_lahir'	=> 'Banjarmasin',
              'tgl_lahir'		=> '2015-01-01',
              'jk'				=> 'L',
              'prodi'			=> 'TI',
              'created_at'      => \Carbon\Carbon::now(),
              'updated_at'      => \Carbon\Carbon::now()
            ],
        ]);
    }
    }

