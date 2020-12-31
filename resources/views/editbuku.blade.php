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

<form method="POST"  action="/buku/update/{{$buku->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="row" style="margin-top: 20px; margin-left: 20px; width:850px; ">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Tambah Anggota baru</h4>
                      
                        
                        <div class="form-group">
                            <label for="judul" class="col-md-4 control-label">Judul</label>
                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control" name="judul" value="{{ $buku->judul }}" required style="width:400px;">
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('isbn') ? ' has-error' : '' }}">
                            <label for="isbn" class="col-md-4 control-label">ISBN</label>
                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control" name="isbn" value="{{ $buku->isbn}}" required style="width:400px;">
                                @if ($errors->has('isbn'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('pengarang') ? ' has-error' : '' }}">
                            <label for="pengarang" class="col-md-4 control-label">Pengarang</label>
                            <div class="col-md-6">
                                <input id="pengarang" type="text" class="form-control" name="pengarang" value="{{ $buku->pengarang }}" required style="width:400px;">
                                @if ($errors->has('pengarang'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pengarang') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="penerbit" class="col-md-4 control-label">Penerbit</label>
                            <div class="col-md-6">
                                <input id="penerbit" type="text" class="form-control" name="penerbit" value="{{ $buku->penerbit }}" required style="width:400px;">
                                
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tahun_terbit') ? ' has-error' : '' }}">
                            <label for="tahun_terbit" class="col-md-4 control-label">Tahun_terbit</label>
                            <div class="col-md-6">
                                <input id="tahun_terbit" type="text" class="form-control" name="tahun_terbit" value="{{ $buku->tahun_terbit }}" required style="width:400px;">
                                @if ($errors->has('tahun_terbit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahun_terbit') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('jumlah_buku') ? ' has-error' : '' }}">
                            <label for="jumlah_buku" class="col-md-4 control-label">Jumlah_buku</label>
                            <div class="col-md-6">
                                <input id="jumlah_buku" type="text" class="form-control" name="jumlah_buku" value="{{ $buku->jumlah_buku }}" required style="width:400px;">
                                @if ($errors->has('jumlah_buku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jumlah_buku') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="deskripsi" class="col-md-4 control-label">Deskripsi</label>
                            <div class="col-md-6">
                                <input id="deskripsi" type="text" class="form-control" name="deskripsi" value="{{ $buku->deskripsi }}" required style="width:400px;">
                                @if ($errors->has('jumlah_buku'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lokasi') ? ' has-error' : '' }}">
                            <label for="lokasi" class="col-md-4 control-label">Lokasi</label>
                            <div class="col-md-6">
                            <select class="form-control" name="lokasi" required=""value="{{ $buku->lokasi }}" style="width:400px;">
                                <option value="Pilih"></option>
                                <option value="rak1" {{$buku->lokasi === "rak1" ? "selected" : ""}} >rak1</option>
                                <option value="rak2"{{$buku->lokasi === "rak2" ? "selected" : ""}} >rak2</option>
                                <option value="rak3"{{$buku->lokasi === "rak3" ? "selected" : ""}} >rak3</option>
                            </select>
                            </div>
                        </div>



                        <input type="submit" value="Ubah" id="edit">
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
