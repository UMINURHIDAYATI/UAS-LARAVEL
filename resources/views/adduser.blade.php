@extends('master')

@section('content')

<form action="/user/create" method="post"enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row" style="margin-top: 20px; margin-left: 20px; width:850px; ">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Anggota baru</h4>
                      
                        
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-6">
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="name" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">password-confirm</label>
                            <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" name="name" value="{{ old('password-confirm') }}" required autocomplete="password-confirm" autofocus>

                            @error('password-confirm')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="roles" class="col-md-4 control-label">roles</label>
                            <div class="col-md-6">
                            <input id="roles" type="text" class="form-control @error('roles') is-invalid @enderror" name="roles" value="{{ old('roles') }}" required autocomplete="roles" autofocus>

                            @error('roles')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="image" class="col-md-4 control-label">Featured_image</label>
                            <div class="col-md-6">
                            <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="image" autofocus>

                            @error('image')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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