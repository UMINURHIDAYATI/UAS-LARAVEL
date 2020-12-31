@extends('master')

@section('content')

<form method="POST"  action="/anggota/create" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row" style="margin-top: 20px; margin-left: 20px; width:850px; ">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Anggota baru</h4>
                      
                        
                        <div class="form-group">
                            <label for="nomor_induk" class="col-md-4 control-label">Nomor_induk</label>
                            <div class="col-md-6">
                                <input id="nomor_induk" type="number" class="form-control" name="nomor_induk" value="{{ old('nomor_induk') }}" maxlength="8" required>
                                @if ($errors->has('nomor_induk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomor_induk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label for="nama" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required>
                                @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nama') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}">
                            <label for="tempat_lahir" class="col-md-4 control-label">Tempat Lahir</label>
                            <div class="col-md-6">
                                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
                                @if ($errors->has('tempat_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}">
                            <label for="tgl_lahir" class="col-md-4 control-label">Tanggal Lahir</label>
                            <div class="col-md-6">
                                <input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required>
                                @if ($errors->has('tgl_lahir'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tgl_lahir') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                            <label for="level" class="col-md-4 control-label">Jenis Kelamin</label>
                            <div class="col-md-6">
                            <select class="form-control" name="jk" required="">
                                <option value=""></option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
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



                        <button type="submit" class="btn btn-primary" name="add">
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