<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <h2>Edit Data Mahasiswa</h2>
    <br/>
    <a href="index.php">Kembali</a>
    <br/><br/>
    <?php
    include 'koneksi.php';
    if(isset($_GET['nim'])){
        $nim = mysqli_real_escape_string($conn, $_GET['nim']);
        $query = "SELECT * FROM mahasiswa WHERE nim = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $nim);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if($data = mysqli_fetch_assoc($result)){
    ?>
    <form method="post" action="ubah_data.php">
        <table>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="nim" value="<?php echo htmlspecialchars($data['nim']); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value="<?php echo htmlspecialchars($data['nama']); ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?php echo htmlspecialchars($data['alamat']); ?>" required></td>
            </tr>
            <tr>
                <td>Angkatan</td>
                <td><input type="text" name="angkatan" value="<?php echo htmlspecialchars($data['angkatan']); ?>" required></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Simpan" class="btn btn-primary"></td>
            </tr>
        </table>
    </form>
    <?php
        } else {
            echo "<p>Mahasiswa tidak ditemukan.</p>";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "<p>NIM tidak tersedia.</p>";
    }

    mysqli_close($conn);
    ?>
</body>
</html>
