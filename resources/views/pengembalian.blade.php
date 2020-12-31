@extends('master')
@section('title')
Pengembalian
@endsection
@section('content')
<div class="row">


    <div class="col-lg-12">
                  @if (Session::has('message'))
                  <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                  @endif
                  </div>
</div>
<div class="row" style="margin-top: 20px; margin-left: -10px; width:900px;">
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
                          Denda
                          </th>
                          <th>
                          Status
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($pengembalian as $p)
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
                            {{$p->denda}}
                          </td>
                          <td>
                            {{$p->status}}
                          </td>
                          <td>
                          <div class="btn-group dropdown">
                          <button type="button" class="btn btn-danger dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                          </button>
                          <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 30px, 0px);">
                            <a class="dropdown-item" href="editpengembalian/{{$p->id}}"> Edit </a>
                            <a class="dropdown-item" href="pengembalian/delete/{{$p->id}}"> Delete </a>
                          </form>
                           
                          </div>
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