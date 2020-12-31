<?php

namespace App\Http\Controllers;
use App\Transaksi;
use PDF;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function __construct()
{
 $this->middleware('auth');
}

    public function index()
    {

        $pengembalian = Transaksi::get();
        return view('pengembalian', compact('pengembalian'));
    }

    

    public function edit($id)
    {   
        $pengembalian = Transaksi::findOrFail($id);
        return view('editpengembalian', compact('pengembalian'));
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

                return redirect('pengembalian');
    }

    public function delete($id)
    {
        Transaksi::find($id)->delete();
        return redirect('pengembalian');
    }

    public function cetak_pdf(){
        $pengembalian = Transaksi::all();
        $pdf = PDF::loadview('pengembalian_pdf',['pengembalian'=>$pengembalian]);
        return $pdf->stream();
       }

}
