<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['kode','buku','peminjam','prodi','tgl_pinjam','tgl_kembali','denda','status'];
}
