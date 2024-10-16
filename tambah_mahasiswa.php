<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nim = mysqli_real_escape_string($conn, $_POST['nim']);
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $alamat = mysqli_real_escape_string($conn, $_POST['alamat']);
    $angkatan = mysqli_real_escape_string($conn, $_POST['angkatan']);

    // Cek apakah NIM sudah ada
    $check_query = "SELECT * FROM mahasiswa WHERE nim = ?";
    $stmt_check = mysqli_prepare($conn, $check_query);
    mysqli_stmt_bind_param($stmt_check, "s", $nim);
    mysqli_stmt_execute($stmt_check);
    $result_check = mysqli_stmt_get_result($stmt_check);

    if(mysqli_num_rows($result_check) > 0){
        echo "<script>alert('NIM sudah terdaftar. Silakan gunakan NIM lain.');window.location='mahasiswa.php';</script>";
    } else {
        $query = "INSERT INTO mahasiswa (nim, nama, alamat, angkatan) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "ssss", $nim, $nama, $alamat, $angkatan);

        if(mysqli_stmt_execute($stmt)){
            echo "<script>alert('Data berhasil ditambah.');window.location='mahasiswa.php';</script>";
        } else {
            die ("Query gagal dijalankan: ".mysqli_error($conn));
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_stmt_close($stmt_check);
}

mysqli_close($conn);
?>
