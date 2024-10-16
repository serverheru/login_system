<!DOCTYPE html>
<html>
<head>
    <title>Login Mahasiswa</title>
    <link rel="stylesheet" href="style.css"> <!-- Pastikan Anda memiliki style.css -->
</head>
<body>
    <div class="container">
        <h2>Login Mahasiswa</h2>
        <?php
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<p class='error'>Data login salah! Silakan coba lagi.</p>";
            } elseif($_GET['pesan'] == "logout"){
                echo "<p class='success'>Anda telah berhasil logout.</p>";
            }
        }
        ?>
        <form method="post" action="login.php">
            <div class="form-group">
                <label>Nama:</label>
                <input type="text" name="nama" required>
            </div>
            <div class="form-group">
                <label>NIM:</label>
                <input type="text" name="nim" required>
            </div>
            <div class="form-group">
                <label>Alamat:</label>
                <input type="text" name="alamat" required>
            </div>
            <div class="form-group">
                <label>Angkatan:</label>
                <input type="text" name="angkatan" required>
            </div>
            <input type="submit" value="LOGIN" class="btn btn-primary">
        </form>
        <div class="link">
            <p>Belum punya akun? <a href="mahasiswa.php">Daftar di sini</a>.</p>
        </div>
    </div>
</body>
<style>