<?php 
// date
// untuk menampilkan tanggal dengan format tertentu
    echo date("l, d-M-Y");


// time
// UNIC Timestamp / EPOCH time
// detik yang tampil merupakan detik yang sudah berlalu sejak 1 januari 1970
// echo time();
echo date("d M Y",time()-60*60*24*100);
// + untuk menghitung waktu kedepan dan - untuk waktu ke belakang

//mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0,)
// jam.menit,detik,bulan,tanggal,tahun
echo date("l", mktime(0,0,0,8,15,2002));

//strtotime
echo date("l", strtotime("15 aug 2002"));


// personal note 
// php.net/manual/en/funcref.php
?>