<?php

function koneksi() {
    // Koneksi ke database
    $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die ;

    return $conn;
}

function query($query) {
    $conn = koneksi();
    // Query ke tabel artikel
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));;
    //siapkan data $tutorial
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data) {
    $conn = koneksi();

    //jika user tidak memilih gambar
    if($_FILES["gambar"]["error"] === 4) {
        $gambar = 'default.jpg' ;
    } else {
        //jalankan fungsi upload gambar
        $gambar = upload();
        if (!$gambar) {
            return false;
        }
    }

    
    $judul =  htmlspecialchars($data['judul']);
    $deskripsi =  htmlspecialchars($data['deskripsi']);
    $link =  htmlspecialchars($data['link']);
    // $gambar =  htmlspecialchars($data['gambar']);

    $query = "INSERT INTO tutorial VALUES (null, '$gambar', '$judul', '$deskripsi', '$link')";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();

    //query mahasiswa berdasarkan id
    $brt = query("SELECT * FROM tutorial WHERE id = $id")[0];

    // hapus file gambar, kecuali default
    if ($brt["gambar"] !== 'default.jpg') {
        unlink('img/' . $brt["gambar"]);
    }

    mysqli_query($conn, "DELETE FROM tutorial WHERE id = $id") or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}

function ubah($data) {
    $conn = koneksi();

    $id = $data["id"];
    $gambar = htmlspecialchars($data['gambar']);
    $judul =  htmlspecialchars($data['judul']);
    $deskripsi =  htmlspecialchars($data['deskripsi']);
    $link =  htmlspecialchars($data['link']);

    $query = "UPDATE tutorial SET
                gambar = '$gambar',
                judul = '$judul',
                deskripsi = '$deskripsi',
                link = '$link'
            WHERE id = $id
            ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);

}

function upload() {
    //siapkan data gambar
    $filename = $_FILES["gambar"]["name"];
    $filetmpname = $_FILES["gambar"]["tmp_name"];
    $filesize = $_FILES["gambar"]["size"];
    $filetype = pathinfo($filename, PATHINFO_EXTENSION);
    $allowedtype = ["jpg", "jpeg", "png"];

    // cek apakah file yg diupload bukan gambar
    if(!in_array($filetype, $allowedtype)) {
        echo "<script> alert('File Tidak Mendukung!'); </script>" ;

        return false;
    }

    //cek apakah gambar terlalu besar
    if($filesize > 1000000) {
        echo "<script> alert('file terlalu besar'); </script>" ;
        return false;
    }
    //lolos pengecekan
    $newfilename = uniqid() . $filename;

    move_uploaded_file($filetmpname, 'img/'. $filename);

    return $filename;
}

function register($data) {
    $conn = koneksi();

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    //cek username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username yang dipilih sudah terdaftar!');
                document.location.href = 'register.php';
                </script>";
        return false;
    }

    //cek konfrimasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
                document.location.href = 'register.php';
                </script>";

        return false;
    }
//enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

//tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', 'user')");

    return mysqli_affected_rows($conn);
}