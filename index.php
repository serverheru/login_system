<!DOCTYPE html>
<html>
<head>
    <title>Sistem Login Mahasiswa</title>
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Pastikan Anda memiliki style.css -->
</head>
<body>
    <div class="judul">
        <h1>Sistem Login Mahasiswa</h1>
        <h2>Selamat Datang</h2>
    </div>
    <br/>
    <?php
    session_start();
    if(!isset($_SESSION['status']) || $_SESSION['status'] != "login"){
        header("Location: form_login.php");
        exit();
    }

    echo "<p>SELAMAT DATANG, " . htmlspecialchars($_SESSION['nama']) . "</p>";
    
    if(isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if($pesan == "input"){
            echo "<p class='success'>Data berhasil diinput.</p>";
        } elseif($pesan == "update"){
            echo "<p class='success'>Data berhasil diupdate.</p>";
        } elseif($pesan == "hapus"){
            echo "<p class='success'>Data berhasil dihapus.</p>";
        }
    }
    ?>
    <br/>
    <a class="tombol" href="mahasiswa.php">+ Tambah Data Baru</a>
    <a class="tombol" href="logout.php">Logout</a> <!-- Link untuk logout -->
    <a class="tombol" href="quiz.php">Website Quiz</a>
    <h3>Data Mahasiswa</h3>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Angkatan</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $query_mysql = mysqli_query($conn, "SELECT * FROM mahasiswa") or die(mysqli_error($conn));
        $nomor = 1;
        while($data = mysqli_fetch_array($query_mysql)){
        ?>
        <tr>
            <td><?php echo $nomor++; ?></td>
            <td><?php echo htmlspecialchars($data['nim']); ?></td>
            <td><?php echo htmlspecialchars($data['nama']); ?></td>
            <td><?php echo htmlspecialchars($data['alamat']); ?></td>
            <td><?php echo htmlspecialchars($data['angkatan']); ?></td>
            <td>
                <a class="edit" href="form_edit.php?nim=<?php echo urlencode($data['nim']); ?>">Edit</a> |
                <a class="hapus" href="hapus_data.php?nim=<?php echo urlencode($data['nim']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?');">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>
