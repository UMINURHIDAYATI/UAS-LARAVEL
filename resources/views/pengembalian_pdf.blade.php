!DOCTYPE html>
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
      <center>
        <h5>Laporan Pengembalian</h4>
        </center>
      </h1>

      <!-- Blog Post -->

      <table class="table table-striped" id="table">
        <thead>
          <tr>
            <th>
              Kode
            </th>
            <th>
              Buku
            </th>
            <th>
              Peminjam
            </th>
            <th>
              Prodi
            </th>
            <th>
              Tanggal_pinjam
            </th>
            <th>
              Tanggal_kembali
            </th>
            <th>
              Denda
            </th>
            <th>
              Status
            </th>
            <th>
              Action
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach($pengembalian as $p)
          <tr>
            <td >

              {{$p->kode}}
            </td>
            <td>
              {{$p->buku}}
            </td>
            <td>
              {{$p->peminjam}}
            </td>
            <td>
              {{$p->prodi}}
            </td>
            <td>
              {{($p->tgl_pinjam)}}
            </td>
            <td>
              {{$p->tgl_kembali}}
            </td>
            <td>
              {{$p->denda}}
            </td>
            <td>
              {{$p->status}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
  </html>
