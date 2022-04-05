<?php 
// $_GET
$mahasiswa = [
	   ["nama" => "Putra Rizqi Pratama",
        "npm" => "213040080", 
        "email" => "putra.213040080@mail.unpas.ac.id", 
        "prodi" => "teknik informatika",
        "gambar" => "1.jpg"], 

        ["nama" => "Agung Purnama Rahmat",
        "npm" => "213040084", 
        "email" => "agung@mail.com", 
        "prodi" => "teknik informatika",
        "gambar" => "2.jpg"]
];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?= $mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&prodi=<?= $mhs["prodi"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>
<?php endforeach; ?>
</ul>

</body>
</html>