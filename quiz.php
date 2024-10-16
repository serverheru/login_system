
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quiz Heru</title>

    <!--Bagian 1 (CSS Mencakup atau Pengaruh ke Seluruh Bagian *)-->
        <style>
        * {
            margin: 0;
            box-sizing: border-box;
         }
       </style> 
</head>


<body>
    <!--Bagian (CSS Khusus Body)-->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>


    <!--Bagian HTML Header-->
    <header>
        <h1>Selamat Datang di Website Quiz</h1>
    </header>

    <!--Bagian CSS Header-->
    <style>
        header {
            background-color: #357ae8;
            color: white;
            padding: 20px;
            text-align: center;
            width: 100%;
        }
    </style>
    
    <!--Bagian HTML Navbar-->
    <nav>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Kepentingan</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>

    <!--Bagian CSS Navbar-->
    <style>
        nav {
            background-color: #333;
            width: 100%;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }
        nav ul li {
            display: inline-block;
            margin-right: 20px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }
    </style>

    <!--Bagian HTML Halaman Utama-->
    <main>
        <h2>Profil Mahasiswa</h2> <br>
        <h4>Nama    : Lalu Hairul Umam</h4><br>
        <h4>NIM     : 230607110050</h4> <br>
        <p>Mahasiswa Semester 3</p>
    </main>

    <!--Bagian CSS Halaman Utama-->
    <style>
        main {
            padding: 20px;
            background-color: white;
            flex-grow: 1;
            width: 100%;
        }
    </style>
    
    <br> <!--Pemberi Jarak-->

    <!--Bagain HTML Footer-->
    <footer>
        <p><i>Made by @Heru</i></p>
    </footer>

    <!--Bagian CSS Footer-->
    <style>
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            width: 100%;
        }
    </style>
</body>
</html>
