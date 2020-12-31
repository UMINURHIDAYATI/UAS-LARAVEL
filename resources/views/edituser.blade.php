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
<form action="/update/{{$us->id}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}  
<input type="hidden" name="id" value="{{$us->id}}">
        <fieldset >
        <legend>Edit</legend>
        <p>
        <label for="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input style="width:100%; height:50px;border: 1px solid grey;border-radius: 20px;"type="text" required="required" name="name" value="{{$us->name}}">
        </p>
        <p>
        <label for="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input style="width:100%; height:50px;border: 1px solid grey;border-radius: 20px;"type="text" class="form-control" required="required" name="email" value="{{$us->email}}"></br>
        </p>
        <p>
        <label for="password">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input style="width:100%; height:50px;border: 1px solid grey;border-radius: 20px;"type="text" class="form-control" required="required" name="password"value="{{$us->password}}"></br>
        </p>
        <p>
        <label for="image">Feature Image</label>
        <input type="file" class="form-control" required="required" name="image" id="image" value="{{$us->featured_image}}"></br>
        <img width="150px" src="{{asset('storage/'.$us->featured_image)}}">
        </p>
        <p>
        <button type="submit" name="edit" class="btn btn-primary float-right">Ubah Profil</button>
        </p>
        </fieldset>
    </form>
    </div>
<div >

</div>

</html>