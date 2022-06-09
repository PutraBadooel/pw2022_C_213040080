<?php
require 'functions2.php';

// query mahasiswa berdasarkan ID
$id = $_GET["id"];
$trl = query("SELECT * FROM tutorial where id = $id")[0];

//cek ketika tombol tambah di klik
if(isset($_POST['ubah'])) {
 
    if(ubah($_POST) > 0); {
        echo "<script>
                alert('data berhasil di Ubah!');
                document.location.href = 
                'tutorialadmin.php'
                </script>";

    }

}
?>






<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ubah Data Artikel</title>
</head>

<body>
    <div class="container">
        <h1>Form Ubah Data Artikel</h1>

        <a href="tutorialadmin.php">Kembali Ke Daftar Artikel</a>

        <div class="row mt-3">
            <div class="col-8">

            <form action="" method="post" autocomplete="off">
                <input type="hidden" name="id" value="<?= $trl["id"]; ?>">

            <div class="mb-3">
                <label for="gambar" class="from-label">gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required value="<?= $trl["gambar"]; ?>">
            </div>

            <div class="mb-3">
                <label for="judul" class="from-label">judul</label>
                <input type="text" class="form-control" id="judul" name="judul" required value="<?= $trl["judul"]; ?>">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="from-label">deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required value="<?= $trl["deskripsi"]; ?>">
            </div>

            <div class="mb-3">
                <label for="link" class="from-label">link</label>
                <input type="text" class="form-control" id="link" name="link" value="<?= $trl["link"]; ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="ubah">Ubah Data</button>

            </form>


            </div>
        </div>


    </div>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>