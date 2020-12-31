@extends('master')
@section('title')
Peminjaman
@endsection
@section('content')
<div class="row">

  <div class="col-lg-3">
    <a href="addpeminjaman" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Peminjaman</a>
  </div>
    <div class="col-lg-12">
                  @if (Session::has('message'))
                  <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                  @endif
                  </div>
</div>
<div class="row" style="margin-top: 20px; margin-left: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title">Data Peminjaman</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            Kode
                          </th>
                          <th>
                            Buku
                          </th>
                          <th>
                            Peminjam
                          </th>
                          <th>
                          Prodi
                          </th>
                          <th>
                          Tanggal_pinjam
                          </th>
                          <th>
                          Tanggal_kembali
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($transaksi as $t)
                        <tr>
                          <td class="py-2">

                            {{$t->kode}}
                          </td>
                          <td>
                            {{$t->buku}}
                          </td>
                          <td>
                            {{$t->peminjam}}
                          </td>
                          <td>
                            {{$t->prodi}}
                          </td>
                          <td>
                          {{($t->tgl_pinjam)}}
                          </td>
                          <td>
                            {{$t->tgl_kembali}}
                          </td>
                          <td>
                            {{$t->denda}}
                          </td>
                          <td>
                            {{$t->status}}
                          </td>
                          <td>
                          
                          <a href="/edittransaksi/{{ $t->id }}" class="badge badgewarning">
                          <button type="button" class="btn btn-success">
                            Edit
                          </button>
                          </a>
                          <a href="transaksi/delete/{{ $t->id }}" class="badge badgewarning">
                          <button type="button" class="btn btn-danger">
                            Hapus
                          </button>
                          </a>
                          </td>
                        </tr>
                      @endforeach
                      </tbody>
                    </table>
                  </div>
              
                </div>
              </div>
            </div>
          </div>
@endsection