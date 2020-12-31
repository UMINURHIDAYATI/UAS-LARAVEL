<?php

namespace App\Http\Controllers;
use App\Transaksi;
use App\Buku;
use App\Anggota;
use PDF;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function __construct()
{
 $this->middleware('auth');
}

    public function index()
    {

        $peminjaman = Transaksi::get();
        return view('peminjaman', compact('peminjaman'));
    }

    public function create()
    {
        
        $getRow = Transaksi::orderBy('id', 'DESC')->get();
        $rowCount = $getRow->count();
        
        $lastId = $getRow->first();

        $kode = "T00001";
        
        if ($rowCount > 0) {
            if ($lastId->id < 9) {
                    $kode = "T000".''.($lastId->id + 1);
            } else if ($lastId->id < 99) {
                    $kode = "T00".''.($lastId->id + 1);
            } else if ($lastId->id < 999) {
                    $kode = "T0".''.($lastId->id + 1);
            } else {
                    $kode = "TR".''.($lastId->id + 1);
            }
        }


        $anggotas = Anggota::get();
        return view('addpeminjaman', compact( 'kode', 'anggotas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode' => 'required|string|max:255',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
            'denda' => 'required',
            'status' => 'required',

        ]);

        $peminjaman = Transaksi::create([
                'kode' => $request->get('kode'),
                'buku' => $request->get('buku'),
                'peminjam' => $request->get('peminjam'),
                'prodi' => $request->get('prodi'),
                'tgl_pinjam' => $request->get('tgl_pinjam'),
                'tgl_kembali' => $request->get('tgl_kembali'),
                'denda' => $request->get('denda'),
                'status' => $request->get('status')
            ]);

        return redirect('peminjaman');

    }

    public function edit($id)
    {   
        $peminjaman = Transaksi::findOrFail($id);
        return view('editpeminjaman', compact('peminjaman'));
    }

    public function update(Request $request, $id)
    {

        Transaksi::find($id)->update([
             'kode' => $request->get('kode'),
                'buku' => $request->get('buku'),
                'peminjam' => $request->get('peminjam'),
                'prodi' => $request->get('prodi'),
                'tgl_pinjam' => $request->get('tgl_pinjam'),
                'tgl_kembali' => $request->get('tgl_kembali'),
                'denda' => $request->get('denda'),
                'status' => $request->get('status')
                ]);

                return redirect('peminjaman');
    }

    public function delete($id)
    {
        Transaksi::find($id)->delete();
        return redirect('peminjaman');
    }

    public function cetak_pdfpeminjaman(){
        $peminjaman = Transaksi::all();
        $pdf = PDF::loadview('peminjaman_pdf',['peminjaman'=>$peminjaman]);
        return $pdf->stream();
       }
}