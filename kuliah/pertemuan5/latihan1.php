<!-- pertemuan dari offline -->

<?php 

// Pertemuan 5 - Array
// Array adalah variabel yang bisa menampung / menyimpan banyak nilai sekaligus

$hari1 = "senin";
$hari2 = "selasa";


$bulan = "januari";
$bulan2 = "febuari";

$mahasiswa1 = "putra";

// membuat ARRAY

$hari = ["senin", "selasa", "rabu", "kamis", "jum'at", "sabtu", "minggu"]; //cara baru
$bulan = array("januari", "febuari", "maret", "april", "mei", "juni", "juli"); //cara lama
$myArr = [10, "putra", true];

// mencetak ARRAY
// mencetak 1 elemen di dalam array
echo $hari[0];
echo "<br>";
echo $bulan[2];

// mencetak dengan var_dump() atau print_r()
// khusus untuk debugging
var_dump ($hari);
print_r ($bulan);
echo "<hr>";

// mencetak semua isi array memggunakan looping
// for
echo $hari[0];
echo "<br>";
echo $hari[1];
echo "<br>";
echo $hari[2];
echo "<br>";
echo $hari[3];
echo "<br>";


//for
for($i = 0; $i < count($hari); $i++) {
    echo $hari[$i];
    echo"<br>";
}
echo "<hr>";

//foreach
foreach ($bulan as $b) {
	echo $b;
	echo "<br>";
}
echo "<hr>";

foreach ($bulan as $key => $value) {
	echo "Key: $key - Value: $value";
	echo "<br>";
}
echo "<hr>";

// memanipulasi ARRAY
// menambah elemen baru di akhir array
$hari[3] = "kamis";
$hari[0] = "Jum'at";
print_r($hari);

 ?>




<!-- pertemuan dari video youtube -->
<?php

//array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki data yang berbeda/campur
// pasangan antara key yang berbeda
// key nya adalah index, yang di mulai dari 0
// membuat array
//cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];

//menampilkan array
menggunakan var_dump() / print_r()
var_dump($hari);
echo "<br>";
print_r($bulan);

//menampilkan 1 elemen pada array
echo "<br>";
echo $arr1[0];
echo "<br>";
echo $bulan[1];

// menambahkan elemen baru pada array
 var_dump($hari);
 $hari[] = "kamis";
 $hari[] = "jumat";
 echo "<br>";
 var_dump($hari);




?>