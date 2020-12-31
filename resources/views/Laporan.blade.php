@extends('master')

@section('content')
<form>
	 <h1 class="my-4">
      <center>
        <h3>Cetak Laporan Perpustakaan</h3>
        </center>
      </h1>
	<div class=" flex flex-tabs 3" >
		<div><a href="/anggota/cetak_pdfanggota" class="btn btn-primary"target="_blank">CETAK PDF ANGGOTA</a></div>
		<div><a href="/buku/cetak_pdfbuku" class="btn btn-primary"target="_blank">CETAK PDF BUKU</a></div>
		<div><a href="/transaksi/cetak_pdftransaksi" class="btn btn-primary"target="_blank">CETAK PDF TRANSAKSI</a></div>
	</div>
</form>

@endsection