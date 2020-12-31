@extends('master')

@section('content')

<form method="POST"  action="{{('store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row" style="margin-top: 20px; margin-left: 20px; width:850px; ">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Peminjaman</h4>
                      
                        
                      <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
                            <label for="kode" class="col-md-4 control-label">Kode</label>
                            <div class="col-md-6">
                                <input id="kode" type="text" class="form-control" name="kode" value="{{ $kode }}" required readonly="">
                                @if ($errors->has('kode'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('buku') ? ' has-error' : '' }}">
                            <label for="buku" class="col-md-4 control-label">Buku</label>
                            <div class="col-md-6">
                                <input id="buku" type="text" class="form-control" name="buku" value="{{ old('buku') }}" required>
                                @if ($errors->has('buku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('buku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('peminjam') ? ' has-error' : '' }}">
                            <label for="peminjam" class="col-md-4 control-label">Peminjam</label>
                            <div class="col-md-6">
                                <input id="peminjam" type="text" class="form-control" name="peminjam" value="{{ old('peminjam') }}" required>
                                @if ($errors->has('peminjam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('peminjam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('prodi') ? ' has-error' : '' }}">
                            <label for="prodi" class="col-md-4 control-label">Prodi</label>
                            <div class="col-md-6">
                            <select class="form-control" name="prodi" required="">
                                <option value=""></option>
                                <option value="TI">Teknik Informatika</option>
                                <option value="SI">Sistem Informasi</option>
                                <option value="MI">Manajemen Informatika</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tgl_pinjam') ? ' has-error' : '' }}">
                            <label for="tgl_pinjam" class="col-md-4 control-label">Tanggal_pinjam</label>
                            <div class="col-md-6">
                                <input id="tgl_pinjam" type="date" class="form-control" name="tgl_pinjam" value="{{ old('tgl_pinjam') }}" required>
                                @if ($errors->has('tgl_pinjam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_pinjam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tgl_kembali') ? ' has-error' : '' }}">
                            <label for="tgl_kembali" class="col-md-4 control-label">Tanggal_kembali</label>
                            <div class="col-md-6">
                                <input id="tgl_kembali" type="date" class="form-control" name="tgl_kembali" value="{{ old('tgl_kembali') }}" required>
                                @if ($errors->has('tgl_kembali'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_kembali') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('denda') ? ' has-error' : '' }}">
                            <label for="denda" class="col-md-4 control-label">Denda</label>
                            <div class="col-md-6">
                                <input id="denda" type="text" class="form-control" name="denda" value="{{ old('denda') }}" required>
                                @if ($errors->has('denda'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('denda') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                            <label for="status" class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                            <select class="form-control" name="status" required="">
                                <option value=""></option>
                                <option value="Belum Kembali">Belum Kembali</option>
                                <option value="Sudah Kembali">Sudah Kembali</option>
                            </select>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit">
                                    Submit
                        </button>
                        <button type="reset" class="btn btn-danger">
                                    Reset
                  </div>
                </div>
              </div>
            </div>

</div>
</form>
@endsection