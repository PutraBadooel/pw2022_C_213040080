<?php 
require 'functions2.php';

if(hapus($_GET["id"]) > 0); {
    echo "<script>
            alert('data berhasil di Hapus!');
            document.location.href = 
            'tutorialadmin.php'
            </script>";

}