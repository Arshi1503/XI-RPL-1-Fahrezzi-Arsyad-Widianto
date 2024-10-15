<?php
$nama = "Fahrezzi Arsyad";
$umur = "16 tahun";
$sekolah = "SMKN 2 Bandung";
$citacita = "Ingin menjadi suaminya Ruan Mei";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <button id="open-btn">Menu</button>
    </nav>
    <div class="sidebar" id= "mySidebar">
        <button onclick= "closeSidebar()" class="close-btn" id="close-btn">&larr;</button>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
        </ul>
    </div>
    <div class="image-wrapper">
        <img src="robin.jpg" alt="istriPertama">
    </div>
    
    <section class ="container">
        <h2>Perkenalkan!</h2>
        <ul>
            <li>Perkenalkan, nama saya <?= $nama ?></li>
            <li>Saya berumur <?= $umur ?></li>
            <li>Saya sedang bersekolah di <?= $sekolah ?></li>
            <li>Cita-cita saya adalah <?= $citacita ?></li>
        </ul>
    </section>
    
    <script src="main.js"></script>
</body>
</html>