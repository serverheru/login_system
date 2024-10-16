<?php
include 'koneksi.php';

if(isset($_POST['nim']) && isset($_POST['nama']) && isset($_POST['alamat']) && isset($_POST['angkatan'])){
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $angkatan = mysqli_real_escape_string($conn, $_POST['angkatan']);

    // Update data di database
    $query = "UPDATE mahasiswa SET nama = ?, alamat = ?, angkatan = ? WHERE nim = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $nama, $alamat, $angkatan, $nim);

    if(mysqli_stmt_execute($stmt)){
        header("Location: index.php?pesan=update");
        exit();
    } else {
        die("Query gagal dijalankan: ".mysqli_error($conn));
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
