<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    protected $table = 'pengembalian';
    protected $fillable = ['kode','buku','peminjam','prodi','tgl_pinjam','tgl_kembali','denda','status'];
}
