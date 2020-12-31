@extends('master')
@section('content')
<div class="col-lg-2">
    <a href="adduser" class="btn btn-primary btn-rounded btn-fw"><i class="fa fa-plus"></i> Tambah User</a>
  </div>
  <br>
<table class="table table-bordered table-striped">
<thead>

<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>Roles</th>
<th>Foto</th>
<th>Edit Profil</th>
</tr>
</thead>
<tbody>
@foreach($us as $u)
<tr>
<td>{{$u->id}}</td>
<td>{{$u->name}}</td>
<td>{{$u->email}}</td>
<td>{{$u->roles}}</td>
<td><img width="150px" src="{{asset('storage/'.$u->featured_image)}}"></td>
<td><a href="us/edit/{{ $u->id }}" ><img src="img/editt.png">

</tr>
@endforeach
</tbody>
</table>
@endsection