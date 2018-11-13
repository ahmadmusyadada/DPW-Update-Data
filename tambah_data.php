<?php
    require 'functions.php';

    if(isset($_POST['submit'])){
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil disimpan');
                    document.location.href='index.php';
                </script>
                ";
        } else {
            echo "
            <script>
                alert('data gagal disimpan');
                document.location.href='index.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <title>Tambah data</title>
    </head>
    <body>
    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" class="active" href="index.php">Daftar Mahasiswa</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="tambah_data.php">Tambah Data Mahasiswa</a></li>
            </ul>
            <form class="navbar-form navbar-right" role="search" method="post">
                <div class="form-group">
                    <input type="text" name="keyword" class="form-control" autofocus placeholder="masukkan keyword pencarian">
                </div>
                <button type="submit" name=cari class="btn btn-default">Cari</button>
            </form>
        </div><!-- /.navbar-collapse -->
    </nav>
        <h1 class="text-center">Tambah Data Mahasiswa</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="Nama">Nama:</label>
                    <input type="text" name="Nama" id="Nama" required>
                </li>
                <li>
                    <label for="Nim">NIM:</label>
                    <input type="text" name="Nim" id="Nim" required>
                </li>
                <li>
                    <label for="Email">Email</label>
                    <input type="text" name="Email" id="Email" required>
                </li>
                <li>
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" name="Jurusan" id="Jurusan" required>
                </li>
                <li>
                    <label for="Gambar">Gambar</label>
                    <input type="text" name="Gambar" id="Gambar" required>
                </li>
                <li>
                    <button type="submit" name="submit"> Tambah </button>
                </li>
            </ul>
        </form>
    </body>
</html>