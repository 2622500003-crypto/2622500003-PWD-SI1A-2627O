<?php
// php punya saqila

if(isset($_GET['nama'])){
  $n = $_GET['nama'];
  echo "<script>alert('Terima kasih $n sudah pesan jam di Watch Aqila');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Watch Aqila</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="header">Web Toko Watch Aqila</div>
<div class="container">
  <div class="sidebar">
    <a href="#home">Home</a>
    <a href="#about">Profil</a>
    <a href="#contact">Buku Tamu</a>
  </div>
  <div class="content">
    <h2>Macam Macam Jam Tangan Watch Aqila</h2>
    <center><img src="jam1.jpeg" width="140"><img src="jam2.jpeg" width="140"><img src="jam3.jpeg" width="140"></center>
    <p>Toko Watch Aqila jualan jam cewek original, murah, bergaransi. Pangkalpinang.</p>
    <h2>Buku Tamu</h2>
    <form id="contactForm" action="index.php" method="GET">
      Nama*<br><input type="text" id="nama" name="nama"><br><br>
      Email*<br><input type="text" id="email" name="email"><br><br>
      No HP*<br><input type="text" id="nohp" name="nohp"><br><br>
      Pesan*<br><textarea id="pesan" name="pesan"></textarea><br><br>
      <button type="submit">Kirim</button>
    </form>
  </div>
</div>
<footer>
  Saqila_Bahari_R_2622500003
</footer>
<script src="script.js"></script>
</body>
</html>