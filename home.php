<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>notes</title>
   <style>
      body {
	background-image: url('img/bg.jpg');
 	background-repeat: no-repeat;
  background-size: cover;
}
   </style>
  </head>
  <body>
 
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#">Notes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="notes.php">Notes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  href="user.php">User</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
    <a href="logout.php" class="btn btn-info">Logout</a>
    </form>
  </div>
</nav>

<div class="jumbotron">
    <div class="container">
        <div class="row">
           <div class="col-md-12">
           <h2><center>Selamat Datang Di Peminjaman Barang</center></h2><hr>
           <h4><center>Disini Kalian Bisa Meminjam Barang</h4></center>
           </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        </div>
    </div>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Peminjaman Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 800px;
            margin: 0 auto;
            margin-top: 50px;
        }
        h1 {
            text-align: center;
        }
        .item {
            border: 1px solid #ccc;
            margin-bottom: 10px;
            padding: 10px;
        }
        .item h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

        
        <div class="item">
            <h2>Barang 1</h2>
            <p>Deskripsi barang 1.</p>
            <p>Status: Tersedia</p>
            <form action="pinjam_barang.php" method="post">
                <input type="hidden" name="item_id" value="1">
                <input type="submit" value="Pinjam">
            </form>
        </div>

        <div class="item">
            <h2>Barang 2</h2>
            <p>Deskripsi barang 2.</p>
            <p>Status: Tersedia</p>
            <form action="pinjam_barang.php" method="post">
                <input type="hidden" name="item_id" value="2">
                <input type="submit" value="Pinjam">
            </form>
        </div>

        <!-- Tambahkan item lainnya sesuai kebutuhan -->

    </div>
</body>
</html>

    </div>
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>