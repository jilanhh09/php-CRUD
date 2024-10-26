<?php 
//menghubungkan ke file functions
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa limit 20");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    

<h1>Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
    <th>id</th>
    <th>Aksi</th>
    <th>nim</th>
    <th>nama</th>
    <th>kode_prodi</th>
    <th>status_aktivitas</th>
</tr>

<?php foreach($mahasiswa as $row): ?>
<tr>
    <td><?php echo $row["id"];?></td>
    <td>
        <a href="ubah.php?id=<?= $row ["id"]; ?>" 
            onclick="return confirm('yakin?');">ubah</a> |

        <a href="hapus.php?id=<?= $row ["id"]; ?>" 
            onclick="return confirm('yakin?');">hapus</a>
    </td>
    <td><?php echo $row["nim"];?> </td>
    <td><?php echo $row["nama"];?></td>
    <td><?php echo $row["kode_prodi"];?></td>
    <td><?php echo $row["status_aktivitas"];?></td>
</tr>
<?php endforeach; ?>

</table>

</body>
</html>
