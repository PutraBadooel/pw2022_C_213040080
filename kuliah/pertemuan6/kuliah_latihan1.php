<?php 
//array Numerik
//array yang index-nya berpasangan dengan angka

$mahasiswa = [
	["Putra Rizqi Pratama", "213040080", "putra.213040080@mail.unpas.ac.id", "teknik informatika"], 
	["Agung Purnama Rahmat", "213040084", "agung@mail.com", "teknik informatika"],
];

var_dump($mahasiswa)[1][2];

 ?>
<?php foreach($mahasiswa as $mhs) { ?>
 <ul>
 	<li>Nama : <?php echo $mhs[0]; ?></li>
 	<li>Npm : <?php echo $mhs[1] ?></li>
 	<li>Email : <?php echo $mhs[2] ?></li>
 	<li>Prodi : <?php echo $mhs[3] ?></li>
 </ul>
 <?php } ?>


