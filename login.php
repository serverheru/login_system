<?php
session_start();
include 'koneksi.php';

if(isset($_POST['nama']) && isset($_POST['nim']) && isset($_POST['alamat']) && isset($_POST['angkatan'])){
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $angkatan = mysqli_real_escape_string($conn, $_POST['angkatan']);

    // Query untuk mencari data mahasiswa
    $query = "SELECT * FROM mahasiswa WHERE nama = ? AND nim = ? AND alamat = ? AND angkatan = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $nama, $nim, $alamat, $angkatan);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['nama'] = $nama;
        $_SESSION['nim'] = $nim;
        $_SESSION['alamat'] = $alamat;
        $_SESSION['angkatan'] = $angkatan;
        $_SESSION['status'] = "login";
        header("Location: index.php");
        exit();
    } else {
        header("Location: form_login.php?pesan=gagal");
        exit();
    }

    mysqli_stmt_close($stmt);
} else {
    header("Location: form_login.php?pesan=gagal");
    exit();
}

mysqli_close($conn);
?>
