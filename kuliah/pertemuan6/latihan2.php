<!-- <?php 
$mahasiswa = [
	["Putra Rizqi Pratama", "213040080", "putra.213040080@mail.unpas.ac.id", "teknik informatika"], 
	["Agung Purnama Rahmat", "213040084", "agung@mail.com", "teknik informatika"],
];
 ?> -->

<!--  	//array associative,sama seperti array numerik,kecuali
 		//key-nya adalah string yang kita buat sendiri -->

 <?php 

$motor = [
		["merk" => "Ducati",
    "jenis" => "Sport", 
    "warna" => "Merah", 
    "bensin" => "Pertamax Turbo",
		"gambar" => "3.jpg"], 

    ["merk" => "Vespa",
    "jenis" => "Matic", 
    "warna" => "Abu", 
    "bensin" => "Pertamax",
		"gambar" => "4.jpg"],
];
  ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Daftar Mahasiswa</title>
 </head>
 <style>
 	.foto {
 		width: auto;
 		height: 200px;
 	}
 </style>
 <body>
 	<h1>Daftar Mahasiswa</h1>

 
	<?php foreach($motor as $mtr) : ?>
	 <ul>
	 	<li>
	 		<img src="img/<?php echo $mtr["gambar"]; ?> " class="foto">
	 	</li>
	 	<li>Merk : <?php echo $mtr["merk"]; ?></li>
	 	<li>Jenis : <?php echo $mtr["jenis"] ?></li>
	 	<li>Warna : <?php echo $mtr["warna"] ?></li>
	 	<li>Top-Speed : <?php echo $mtr["bensin"] ?></li>
	 </ul>
	 <?php endforeach ?>

 </body>
 </html>