<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Buku;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;
class BukuController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
   }

   public function index()
   {

    $buku = Buku::get();
    return view('buku', compact('buku'));
    }

    public function bukuuser()
    {

    $buku = Buku::get();
    return view('bukuuser', compact('buku'));
    }

public function add()
{
    return view('/addbuku');
}


public function create(Request $request)
{
    Buku::create([
        'judul' => $request->judul,
        'isbn' => $request->isbn,
        'pengarang' => $request->pengarang,
        'tahun_terbit' => $request->tahun_terbit,
        'jumlah_buku' => $request->jumlah_buku,
        'lokasi' => $request->lokasi,
    ]);
    return redirect('/buku');
}

public function edit($id )
{
    $buku = Buku::find($id);
    return view('editbuku',['buku'=>$buku]);
}

public function update($id, Request $request)
{
   $buku = Buku::find($id);
   $buku->judul = $request->judul;
   $buku->isbn = $request->isbn;
   $buku->pengarang = $request->pengarang;
   $buku->tahun_terbit = $request->tahun_terbit;
   $buku->jumlah_buku = $request->jumlah_buku;
   $buku->lokasi = $request->lokasi;
   $buku->save();
   return redirect('/buku');
}

public function delete($id)
{
    Buku::find($id)->delete();
    return redirect('buku');
}

public function cetak_pdf(){
    $data = Buku::all();
    $pdf = PDF::loadview('buku_pdf',['buku'=>$data]);
    return $pdf->stream();
}

    // public function create(Request $request)
    // {
    //     if($request->file('image')){
    //         $cover = $request->file('image')->store('images','public');
    //         }           
    //     Buku::create([
    //     'judul' => $request->judul,
    //     'isbn' => $isbn = !empty($request->isbn) ? $request->isbn : 'default value',
    //     'pengarang' => $request->pengarang,
    //     'penerbit' => $request->penerbit,
    //     'tahun_terbit' => $request->tahun_terbit,
    //     'jumlah_buku' => $request->jumlah_buku,
    //     'deskripsi' => $request->deskripsi,
    //     'lokasi' => $request->lokasi,
    //     'cover' => $cover = !empty($request->cover) ? $request->cover : 'default value',
    //     ]);
    //     return redirect('/buku');
    //     }
}
