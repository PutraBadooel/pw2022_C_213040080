<?php 


$mahasiswa = [
	["nama" => "Putra Rizqi Pratama",
    "npm" => "213040080", 
    "email" => "putra.213040080@mail.unpas.ac.id", 
    "prodi" => "teknik informatika"], 

    ["nama" => "Agung Purnama Rahmat",
    "npm" => "213040084", 
    "email" => "agung@mail.com", 
    "prodi" => "teknik informatika"], 
];

// var_dump($mahasiswa)[0]["email"];

?>

<?php foreach($mahasiswa as $mhs) { ?>
 <ul>
 	<li>Nama : <?php echo $mhs["nama"]; ?></li>
 	<li>Npm : <?php echo $mhs["npm"] ?></li>
 	<li>Email : <?php echo $mhs["email"] ?></li>
 	<li>Prodi : <?php echo $mhs["prodi"] ?></li>
 </ul>
 <?php } ?>

 <hr>

 <?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <?php foreach($mhs as $key => $value) { ?>
        <li><?php echo $key; ?>: <?php echo $value; ?></li>
        <?php } ?>
    </ul>
    <?php } ?>