<?php
    // Definisikan path root untuk mempermudah pemanggilan aset
    $base_url = '/profil_mi/'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo isset($page_title) ? $page_title . ' - MI Al-Hidayah' : 'MI Al-Hidayah'; ?></title>
    
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lightbox2 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
    
    <!-- Link ke file CSS utama kita -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/css/style.css">
</head>
<body>

<header class="main-header">
    <div class="container">
        <a href="<?php echo $base_url; ?>index.php" class="logo">
            MI Al-Hidayah
        </a>
        <nav class="main-nav">
            <ul>
                <li><a href="<?php echo $base_url; ?>index.php">Beranda</a></li>
                <li><a href="<?php echo $base_url; ?>tentang.php">Tentang Kami</a></li>
                <li><a href="<?php echo $base_url; ?>akademik.php">Akademik</a></li>
                <li><a href="<?php echo $base_url; ?>pendaftaran.php">Pendaftaran</a></li>
                <li><a href="<?php echo $base_url; ?>galeri.php">Galeri</a></li>
                <li><a href="<?php echo $base_url; ?>kontak.php">Kontak</a></li>
            </ul>
        </nav>
        <button class="hamburger" id="hamburger-menu" aria-label="Buka menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<main>
