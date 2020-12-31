<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anggota;
use Auth;
use Illuminate\Support\Facades\Gate;
class AnggotaController extends Controller
{
    public function __construct()
{
 $this->middleware('auth');
}

    public function index()
    {

        $anggota = Anggota::get();
        return view('anggota', compact('anggota'));
    }


    public function add()
    {
    return view('/addanggota');
    }

    public function create(Request $request)
{
    Anggota::create([
    'nomor_induk' => $nomor_induk = !empty($request->nomor_induk) ? $request->nomor_induk : 'default value',
    'nama' => $request->nama,
    'tempat_lahir' => $request->tempat_lahir,
    'tgl_lahir' => $request->tgl_lahir,
    'jk' => $request->jk,
    'prodi' => $request->prodi,
    ]);
    return redirect('/anggota');
    }

    public function edit($id )
    {
    $anggota = Anggota::find($id);
    return view('editanggota',['anggota'=>$anggota]);
    }
    
    public function update($id, Request $request)
 {
 $anggota = Anggota::find($id);
 $anggota->nomor_induk = $request->nomor_induk;
 $anggota->nama = $request->nama;
 $anggota->tempat_lahir = $request->tempat_lahir;
 $anggota->tgl_lahir = $request->tgl_lahir;
 $anggota->jk = $request->jk;
 $anggota->prodi = $request->prodi;
 $anggota->save();
 return redirect('/anggota');
 }

 public function delete($id)
 {
 $anggota = Anggota::find($id);
 $anggota->delete();
 return redirect('/anggota');
 }
    
}
