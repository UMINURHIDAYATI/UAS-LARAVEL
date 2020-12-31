<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';
    protected $fillable = ['kode','buku','peminjam','prodi','tgl_pinjam','tgl_kembali'];
}
