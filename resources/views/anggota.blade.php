@extends('master')
@section('title')
Anggota
@endsection
@section('content')
<div class="row">

  <div class="col-lg-3">
    <a href="addanggota" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah Anggota</a>
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
                  <h4 class="card-title">Data Anggota</h4>
                  
                  <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            Nama
                          </th>
                          <th>
                            Nomor_induk
                          </th>
                          <th>
                            Tempat_lahir
                          </th>
                          <th>
                            Tanggal_lahir
                          </th>
                          <th>
                            Prodi
                          </th>
                          <th>
                            Jenis Kelamin
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($anggota as $a)
                        <tr>
                          <td class="py-2">

                            {{$a->nama}}
                          </td>
                          <td>
                            {{$a->nomor_induk}}
                          </td>
                          <td>
                            {{$a->tempat_lahir}}
                          </td>
                          <td>
                            {{$a->tgl_lahir}}
                          </td>
                          <td>
                          {{($a->prodi)}}
                          </td>
                          <td>
                            {{$a->jk}}
                          </td>
                          <td>
                          
                          <a href="anggota/edit/{{ $a->id }}" class="badge badgewarning">
                          <button type="button" class="btn btn-success">
                            Edit
                          </button>
                          </a>
                          <a href="anggota/delete/{{ $a->id }}" class="badge badgewarning">
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