<?php
require 'functions2.php';

$tutorial = query("SELECT * FROM  tutorial");

//query sesaui dengan keyword pencarian

if(isset($_GET["cari"])) {
    $keyword = $_GET["keyword"];
    $query = "SELECT * FROM tutorial WHERE judul LIKE '%$keyword%'";
    $tutorial = query($query);
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

    <title>Daftar Tutorial</title>
</head>
<!-- Navbar -->
<body>
<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="tutorialadmin.php">Tech<strong>News</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <a href="admin.html" class="btn btn-primary">Kembali</a>
        <a href="tambah2.php" class="btn btn-primary">TambahData</a>
          <form action="" class="d-flex" role="search" method="get" style="padding-left:60% ;">
            <input class="form-control me-2" type="text" name="keyword" placeholder="Search" aria-label="search" autocomplete="off">
            <button class="btn btn-outline-dark" type="submit" name="cari" id="cari">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
    <div class="container">
      <!-- content -->
        <h1>Daftar Tutorial</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">judul</th>
                    <th scope="col">deskripsi</th>
                    <th scope="col">link</th>
                    <th scope="col">aksi</th>

                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach ($tutorial as $trl) { ?>
                    <tr>
                        <th scope="row"><?= $i++;?></th>
                        <td>
                            <img src="img/<?php echo $trl["gambar"]; ?>" height="150" class="img-review">
                        </td>
                        <td><?php echo $trl["judul"] ?></td>
                        <td><?php echo $trl["deskripsi"] ?></td>
                        <td><a href="<?php echo $trl["link"] ?>" class="btn badge bg-primary">read more</a></td>
                        <td>
                            <a href="ubah2.php?id=<?= $trl["id"]; ?>" class="btn badge bg-warning">Ubah</a>
                            <a href="hapus2.php?id=<?= $trl["id"]; ?>" class="btn badge bg-danger" onclick="return confirm('Yakin u bos?');">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

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