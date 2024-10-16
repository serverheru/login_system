<?php
include 'koneksi.php';

if(isset($_GET['nim'])){
    $nim = mysqli_real_escape_string($conn, $_GET['nim']);

    // Hapus data dari database
    $query = "DELETE FROM mahasiswa WHERE nim = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $nim);

    if(mysqli_stmt_execute($stmt)){
        header("Location: index.php?pesan=hapus");
        exit();
    } else {
        die("Query gagal dijalankan: ".mysqli_error($conn));
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
