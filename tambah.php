<?php 
require 'functions.php';

//koneksi ke DBMS
$conn = mysqli_connect("localhost","root", "", "web_sekolah");

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){

    //cek apakah data berhasil ditambah
    if(tambah ($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil ditambahkan');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan');
                document.location.href = 'index.php'
            </script>
        ";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

<h1>Tambah Data Mahasiswa</h1>

<form action="" method="post">
    <ul>
        <li>
            <label for="nim">NIM :</label>
            <input type="text" name="nim" id="nim" required>
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required>
        </li>
        <li>
            <label for="kode_prodi">Kode Prodi:</label>
            <input type="text" name="kode_prodi" id="kode_prodi" required>
        </li>
        <li>
            <label for="status_aktivitas">Status Aktivitas:</label>
            <input type="text" name="status_aktivitas" id="status_aktivitas" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
</form>
    
</body>
</html>