<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>kontak</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-post.css" rel="stylesheet">

</head>

<body>



 <!-- Page Content -->

 <div class="container">

  <!-- Blog Entries Column -->
  
  <div class="col-md-8">

    <h1 class="my-4">
      <center>Laporan Anggota</center>
      </h1>

      <!-- Blog Post -->

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

          </tr>
          @endforeach
        </tbody>
      </table>

      
      
    </div>

    
  </div>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
