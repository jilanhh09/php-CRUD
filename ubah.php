<?php 
require 'functions.php';

//koneksi ke DBMS
$conn = mysqli_connect("localhost","root", "", "web_sekolah");

// Ambil id dari URL, pastikan nim ada sebelum mencoba mengaksesnya
if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan.";
    exit;
}
$id = $_GET['id'];

// Query untuk mendapatkan data mahasiswa yang akan diubah
$result = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id = '$id'");
$data = mysqli_fetch_assoc($result);

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){

    //cek apakah data berhasil ditambah
    if(ubah ($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah');
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
    <title>Ubah Data Mahasiswa</title>
</head>
<body>

<h1>Ubah Data Mahasiswa</h1>
<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <ul>
        <li>
            <label for="nim">NIM :</label>
            <input type="text" name="nim" id="nim" value="<?php echo $data['nim']; ?>" readonly>
        </li>
        <li>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required>
        </li>
        <li>
            <label for="kode_prodi">Kode Prodi :</label>
            <input type="text" name="kode_prodi" id="kode_prodi" value="<?php echo $data['kode_prodi']; ?>" required>
        </li>
        <li>
            <label for="status_aktivitas">Status Aktivitas:</label>
            <input type="text" name="status_aktivitas" id="status_aktivitas" value="<?php echo $data['status_aktivitas']; ?>" required>
        </li>
        <li>
            <button type="submit" name="submit">Simpan</button>
        </li>
    </ul>
</form>
    
</body>
</html>