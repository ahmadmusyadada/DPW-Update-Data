<?php
    require 'functions.php';
    if(isset($_POST['submit'])){
        if(edit($_POST) > 0){
            echo "
            <script>
                alert('data berhasil diperbaharui');
                document.location.href='index.php';
            </script>
            ";
        } else {
            echo "
            <script>
                alert('data gagal diperharui');
                document.location.href='edit.php';
            </script>
            ";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
    $id=$_GET[id];
    $mhs=query("SELECT *FROM mahasiswa WHERE id=$id")[0];
    // var_dump($id);
    // var_dump($mhs[0]["Nama"]);
    // var_dump($mhs);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data Mahasiswa</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="Nama">Nama: </label>
                <input type="text" name="Nama" id="Nama" value="<?= $mhs[Nama]; ?>">
            </li>
            <li>
                <label for="Nim">NIM: </label>
                <input type="text" name="Nim" id="Nim" required value="<?= $mhs[Nim]; ?>">
            </li>
            <li>
                <label for="Email">Email: </label>
                <input type="text" name="Email" id="Email" required value="<?= $mhs[Email]; ?>">
            </li>
            <li>
                <label for="Jurusan">Jurusan: </label>
                <input type="text" name="Jurusan" id="Jurusan" required value="<?= $mhs[Jurusan]; ?>">
            </li>
            <li>
                <label for="Gambar">Gambar: </label>
                <input type="text" name="Gambar" id="Gambar" required value="<?= $mhs[Gambar]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Update</button>
            </li>
        </ul>
    </form>
</body>
</html>