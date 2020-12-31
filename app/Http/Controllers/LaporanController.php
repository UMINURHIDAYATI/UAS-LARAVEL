<?php

namespace App\Http\Controllers;
use Auth;
use PDF;
use DB;
use App\Transaksi;
use App\Anggota;
use App\Buku;
use App\Peminjaman;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function __construct()
{
 $this->middleware('auth');
}

    public function index(){
    return view('/laporan');
    }

    public function cetak_pdfanggota(){
        $anggota = Anggota::all();
        $pdf = PDF::loadview('anggota_pdf',['anggota'=>$anggota]);
        return $pdf->stream();
       }
    public function cetak_pdfbuku(){
        $buku = Buku::all();
        $pdf = PDF::loadview('buku_pdf',['buku'=>$buku]);
        return $pdf->stream();
       }

       public function cetak_pdfpeminjaman(){
        $peminjaman = Peminjaman::all();
        $pdf = PDF::loadview('peminjaman_pdf',['peminjaman'=>$peminjaman]);
        return $pdf->stream();
       }
}
