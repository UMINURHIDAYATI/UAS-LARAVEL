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
<div class="row" style="margin-top: 20px; margin-left: -10px;">
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
                      @foreach($peminjaman as $p)
                        <tr>
                          <td class="py-2">

                            {{$p->kode}}
                          </td>
                          <td>
                            {{$p->buku}}
                          </td>
                          <td>
                            {{$p->peminjam}}
                          </td>
                          <td>
                            {{$p->prodi}}
                          </td>
                          <td>
                          {{($p->tgl_pinjam)}}
                          </td>
                          <td>
                            {{$p->tgl_kembali}}
                          </td>
                          <td>
                          
                          <a href="/editpeminjaman/{{ $p->id }}" class="badge badgewarning">
                          <button type="button" class="btn btn-success">
                            Edit
                          </button>
                          </a>
                          <a href="peminjaman/delete/{{ $p->id }}" class="badge badgewarning">
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