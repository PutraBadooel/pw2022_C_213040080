<?php 
//superglobals
//variable milik php yang bisa kita gunakan
//bentuknya array associative
//$_GET
//$_POST
//$_SERVER
// $_GET['nama'] = "Putra";
// $_GET['email'] = "Putra.21340080";
// var_dump($_GET);
// var_dump($_POST);
if (isset($_GET['nama'])) {
    $nama = $_GET["nama"];
} else {
    $nama = "Anonymous";
}
 ?>

 <h1>Halo, <?= $nama; ?></h1>
 <ul>
 	<li>
 		<a href="kuliah_latihan1.php?nama=Agung">Agung</a>
 	</li>
 	<li>
 		<a href="?nama=Fasya">Fasya</a>
 	</li>
 	<li>
 		<a href="kuliah_latihan1.php?nama=Hafiz">Hafiz</a>
 	</li>
 </ul>