<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = [ 'nomor_induk', 'nama', 'tempat_lahir', 'tgl_lahir', 'jk', 'prodi'];

}
