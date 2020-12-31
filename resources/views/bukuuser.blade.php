@extends('master')
@section('title')
BukuUser
@endsection
@section('content')
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

        </div>
    <div class="col-lg-12">
                  @if (Session::has('message'))
                  <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
                  @endif
                  </div>
</div>
<div class="row" style="margin-top: 20px;">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="table">
                      <thead>
                        <tr>
                          <th>
                            Judul
                          </th>
                          <th>
                            ISBN
                          </th>
                          <th>
                            Pengarang
                          </th>
                          <th>
                            Tahun
                          </th>
                          <th>
                            Stok
                          </th>
                          <th>
                            Rak
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($buku as $b)
                        <tr>
                          <td class="py-1">
                            {{$b->judul}}
                          </a>
                          </td>
                          <td>
                            {{$b->isbn}}
                          </td>

                          <td>
                            {{$b->pengarang}}
                          </td>
                          <td>
                            {{$b->tahun_terbit}}
                          </td>
                          <td>
                            {{$b->jumlah_buku}}
                          </td>
                          <td>
                            {{$b->lokasi}}
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