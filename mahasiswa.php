<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css"> <!-- Pastikan Anda memiliki style.css -->
</head>
<body>
     
    <!-- Main Content -->
    <section class="content">
        <div class="container">
            <h2 style="text-align:center;">Tambah Data Mahasiswa</h2>
            <form action="tambah_mahasiswa.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>NIM :</label>
                    <input type="text" class="form-control" placeholder="Masukkan NIM" name="nim" required>
                </div>
                <div class="form-group">
                    <label>NAMA :</label>
                    <input type="text" class="form-control" placeholder="Masukkan NAMA" name="nama" required>
                </div>
                <div class="form-group">
                    <label>ALAMAT :</label>
                    <input type="text" class="form-control" placeholder="Masukkan ALAMAT" name="alamat" required>
                </div>
                <div class="form-group">
                    <label>ANGKATAN :</label>
                    <input type="text" class="form-control" placeholder="Masukkan ANGKATAN" name="angkatan" required>
                </div>
                <input type="submit" name="submit" value="Simpan" class="btn btn-primary">
            </form>
        </div>
    </section>

</body>
</html>
