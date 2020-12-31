<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $fillable = ['judul', 'isbn', 'penerbit', 'pengarang', 'tahun_terbit', 'jumlah_buku', 'lokasi', 'deskripsi'];
}
