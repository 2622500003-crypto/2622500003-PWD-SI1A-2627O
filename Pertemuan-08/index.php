
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Aqila</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #fff0f5;
            color: #333;
        }

        header {
            background-color: #d87093;
            color: white;
            text-align: center;
            padding: 20px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav li {
            display: inline-block;
            margin: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        section {
            padding: 25px;
            margin: 20px;
            background-color: white;
            border-radius: 10px;
        }

        .produk {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .produk img {
            width: 200px;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
        }

        input, textarea {
            width: 90%;
            max-width: 400px;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #d87093;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        footer {
            background-color: #d87093;
            color: white;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>

<body>

<header>
    <h1>WATCH AQILA</h1>
    <p>Toko Jam Tangan Perempuan</p>

    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Profil</a></li>
            <li><a href="#contact">Buku Tamu</a></li>
        </ul>
    </nav>
</header>

<section id="home">
    <h2>Selamat Datang</h2>

    <p>
        Halo, saya Saqila Bahari R.
        Saya menjual aneka jam tangan perempuan
        dengan berbagai model yang cantik dan elegan.
    </p>

    <h3>Produk Kami</h3>

    <div class="produk">
        <img src="jam1.jpeg" alt="Jam Tangan 1">
        <img src="jam2.jpeg" alt="Jam Tangan 2">
        <img src="jam3.jpeg" alt="Jam Tangan 3">
        <img src="jam4.jpeg" alt="Jam Tangan 4">
        <img src="jam5.jpeg" alt="Jam Tangan 5">
    </div>
</section>

<section id="about">
    <h2>Profil Saya</h2>

    <p>Nama: Saqila Bahari R.</p>
    <p>Pekerjaan: Penjual Jam Tangan Perempuan</p>

    <p>
        Toko ini berfokus menjual aneka jam tangan perempuan
        dengan berbagai desain dan harga yang terjangkau
        di Kota Pangkalpinang.
    </p>
</section>

<section id="contact">
    <h2>Buku Tamu</h2>

    <p>
        Silakan tinggalkan pesan untuk pemesanan
        jam tangan perempuan di Watch Aqila.
    </p>

    <p>Nama: Saqila Bahari R.</p>
    <p>Jenis Kelamin: Perempuan</p>
    <p>Alamat: Jl. Bukit Merapin</p>
    <p>Program Studi: Sistem Informasi</p>
    <p>Mata Kuliah: Pemrograman Web</p>

    <h3>Formulir Pemesanan</h3>

    <form action="#" method="get">

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"
               placeholder="Masukkan nama Anda" required>
        <br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"
               placeholder="Masukkan email Anda" required>
        <br><br>

        <label for="nohp">No HP:</label><br>
        <input type="tel" id="nohp" name="nohp"
               placeholder="Masukkan nomor HP Anda" required>
        <br><br>

        <label for="pesan">Pesan:</label><br>
        <textarea id="pesan" name="pesan"
                  placeholder="Masukkan pesan Anda"
                  required></textarea>
        <br><br>

        <button type="submit">Kirim</button>

    </form>
</section>

<footer>
    <p>Saqila_Bahari_R_2622500003</p>
    <p>© 2026 Watch Aqila</p>
</footer>

</body>
</html>
