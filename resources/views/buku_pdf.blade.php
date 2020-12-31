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
        <h5>Laporan Buku</h4>
        </center>
      </h1>

      <!-- Blog Post -->

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
              Deskripsi
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
            {{$b->deskripsi}}
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
  </body>
  </html>