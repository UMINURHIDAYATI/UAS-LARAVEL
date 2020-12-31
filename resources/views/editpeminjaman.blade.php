<html>
<body>

<style type="text/css">
body{
   background-color:#F3F3F3;
}
ul {
    list-style-type: none;
    margin-top: -1px;
    margin-left: -8px;
    padding: 0;
    width: 270px;
    height:700px;
    background: linear-gradient(to top, #5768f3, #1c45ef);
}

li a {
    display: block;
    color: white;
    padding: 8px 0 8px 16px;
    text-decoration: none;
    white-space: nowrap; 
    align-items: center;
    padding: 15px 30px 15px 55px;
    white-space: nowrap;
    color: #fff;
    font-size: 18px;
    line-height: 1;
    vertical-align: middle;
    font-weight: 500;
    margin-top:20px;
}

/* Change the link color on hover */
li a:hover {
    background-color: transparent;
    color: white;
}
.tentang{
	width: 650px;
	height: 450px;
	background-color: #fafafa;
    padding: 33px;
    border-radius: 20px;
    margin-left: 50px;
    margin-top: 80px;
}
/* .konten{
    width:500px;
    height:500px;
    background:white;
    position:absolute;
    margin-left:500px;
    margin-top:-900px;
} */
.atas{
    background: white;
    height:50px;
    width:990px;
    margin-left:264px;
    margin-top:-80px;

}
.perpus{
    width: 270px;
    height:80px;
    margin-top:-10px;
    background: #1c45ef;
    margin-left: -8px;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.konten {
  border-radius: 5px;
  padding: 20px;
  width:500px;
  background:white;
    position:absolute;
    margin-left:500px;
    margin-top:-700px;
}

</style>
<div class="perpus"></div>
<div class="atas"></div>
<ul>
<p style="color: rgba(255, 255, 255, 0.7);border-bottom: 1px solid rgba(255, 255, 255, 0.13);margin: 0 30px;font-size: 15px;font-weight: 500;padding: 10px 0px 15px 0px;">Main Menu<p>

  <li><a href="master">Dashboard</a></li>
  <li><a href="anggota">Anggota</a></li>
  <li><a href="peminjaman">Peminjaman</a></li>
  <li><a href="pengembalian">Pengembalian</a></li>
</ul>

<div class="konten">
  <form action="/peminjaman/update/{{$peminjaman->id}}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
<div class="row">
<input type="hidden" name="id" value="{{$peminjaman->id}}">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Edit Peminjaman</h4>
                      
                      <div class="form-group">
                            <label for="kode" class="col-md-4 control-label">Kode</label>
                            <div class="col-md-6">
                                <input id="kode" type="text" class="form-control" name="kode" value="{{ $peminjaman->kode }}" required readonly="">
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('buku') ? ' has-error' : '' }}">
                            <label for="buku" class="col-md-4 control-label">Buku</label>
                            <div class="col-md-6">
                                <input id="buku" type="text" class="form-control" name="buku" value="{{ $peminjaman->buku }}" required>
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
                                <input id="peminjam" type="text" class="form-control" name="peminjam" value="{{ $peminjaman->peminjam }}" required>
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
                                <option value="TI" {{$peminjaman->prodi === "TI" ? "selected" : ""}} >Teknik Informatika</option>
                                <option value="SI" {{$peminjaman->prodi === "SI" ? "selected" : ""}} >Sistem Informasi</option>
                                <option value="MI" {{$peminjaman->prodi === "MI" ? "selected" : ""}} >Manajemen Informatika</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tgl_pinjam') ? ' has-error' : '' }}">
                            <label for="tgl_pinjam" class="col-md-4 control-label">Tanggal_pinjam</label>
                            <div class="col-md-6">
                                <input id="tgl_pinjam" type="date" class="form-control" name="tgl_pinjam" value="{{ $peminjaman->tgl_pinjam }}" required>
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
                                <input id="tgl_kembali" type="date" class="form-control" name="tgl_kembali" value="{{ $peminjaman->tgl_kembali }}" required>
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
                                <input id="denda" type="text" class="form-control" name="denda" value="{{ $peminjaman->denda }}" required>
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
                            <select class="form-control" name="status" value="{{ $peminjaman->status }}"required="">
                                <option value=""></option>
                                <option value="BK">Belum Kembali</option>
                                <option value="SK">Sudah Kembali</option>
                            </select>
                            </div>
                        </div>

                        
                        <input type="submit" value="Ubah" id="edit">
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>

    
  </form>
</div>
<div >

</div>

</html>
