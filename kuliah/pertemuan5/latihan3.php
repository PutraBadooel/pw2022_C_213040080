<?php 
$mahasiswa = [["Putra Rizqi Pratama", "213040080", "teknik informatika", "Putra.213040080@mail.unpas.ac.id"],
["badoel", "213040081", "teknik informatika", "Putra.213040081@mail.unpas.ac.id"], 
["org", "213040083", "teknik informatika", "Putra.213040083@mail.unpas.ac.id"]


];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
<!-- cara manual -->
    <ul>
        <li>Putra Rizqi Pratama</li>
        <li>213040080</li>
        <li>Teknik Informatika</li>
        <li>Putra.213040080@mail.unpas.ac.id</li>
    </ul>

<!-- cara php -->
<ul>
        <?php foreach( $mahasiswa as $m ) : ?>
        	<li><?php echo $m; ?></li>
        <?php endforeach; ?>
    </ul>

<!-- cara php 2 -->
            <ul>
                <li><?= $mahasiswa[0]; ?></li>
                <li><?= $mahasiswa[1]; ?></li> 
                <li><?= $mahasiswa[2]; ?></li> 
                <li><?= $mahasiswa[3]; ?></li>
            </ul>

<!-- jika menggunakan keterangan -->
	<?php foreach( $mahasiswa as $mhs) : ?>
		<ul>
                <li>Nama : <?= $mhs[0]; ?></li>
                <li>Nrp : <?= $mhs[1]; ?></li> 
                <li>Jurusan : <?= $mhs[2]; ?></li> 
                <li>Email : <?= $mhs[3]; ?></li>
            </ul>
	<?php endforeach; ?>





</body>
</html>