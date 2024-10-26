<?php
//koneksi ke database
$conn = mysqli_connect("localhost","root","","web_sekolah");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows=[];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function tambah ($data){
    global $conn;

    //ambil data dari tiap elemen form
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $kode_prodi = htmlspecialchars($data["kode_prodi"]);
    $status_aktivitas= htmlspecialchars($data["status_aktivitas"]);

     //query insert data
$query = "INSERT INTO mahasiswa
             VALUES
           ('', '$nim', '$nama', '$kode_prodi', '$status_aktivitas')
         ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}


    //query hapus data
function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

    //query ubah data
    
    // fungsi untuk mengubah data mahasiswa
    function ubah($data) {
        global $conn;
    
        // Ambil data dari form
        $id = $data["id"];
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $kode_prodi = htmlspecialchars($data["kode_prodi"]);
        $status_aktivitas = htmlspecialchars($data["status_aktivitas"]);
    
        // Query update data
        $query = "UPDATE mahasiswa SET
                    nama = '$nama',
                    kode_prodi = '$kode_prodi',
                    status_aktivitas = '$status_aktivitas'
                  WHERE id = '$id'";
    
        // Eksekusi query
        mysqli_query($conn, $query);
    
        return mysqli_affected_rows($conn);
    }
    
    




?>