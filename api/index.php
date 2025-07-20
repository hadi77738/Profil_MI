<?php 
    // Set judul halaman untuk ditampilkan di browser
    $page_title = "Beranda"; 

    // Memanggil file header
    include '../templates/header.php'; 
?>

<!-- === BAGIAN HERO === -->
<section class="hero-section">
    <div class="hero-content">
        <h1>Membentuk Generasi Qur'ani, Cerdas, dan Berprestasi</h1>
        <p>MI Al-Hidayah adalah lembaga pendidikan yang berkomitmen untuk memberikan pendidikan Islam berkualitas yang terintegrasi dengan ilmu pengetahuan modern.</p>
        <a href="pendaftaran.php" class="btn btn-primary">Info Pendaftaran</a>
        <a href="tentang.php" class="btn btn-secondary">Selengkapnya</a>
    </div>
</section>

<!-- === BAGIAN SAMBUTAN KEPALA SEKOLAH === -->
<section class="welcome-section container">
    <div class="welcome-image">
        <!-- Ganti 'kepala-sekolah.jpg' dengan nama file foto yang sebenarnya -->
        <img src="assets/images/kepala-sekolah.jpg" alt="Foto Kepala Sekolah MI Al-Hidayah" onerror="this.onerror=null;this.src='https://placehold.co/400x400/006400/FFFFFF?text=Foto+Kepsek';">
    </div>
    <div class="welcome-text">
        <h2>Sambutan Kepala Sekolah</h2>
        <p>Assalamu'alaikum Warahmatullahi Wabarakatuh.</p>
        <p>Selamat datang di website resmi MI Al-Hidayah. Kami bersyukur dapat menyajikan informasi seputar kegiatan dan prestasi sekolah melalui media ini. Kami berkomitmen untuk terus meningkatkan kualitas pendidikan demi mencetak generasi penerus yang tidak hanya unggul dalam akademik, tetapi juga memiliki akhlakul karimah. Mari bersama-sama kita wujudkan visi besar ini.</p>
        <p><strong>Bapak H. Abdullah, S.Pd.I</strong><br><small>Kepala Sekolah</small></p>
    </div>
</section>

<!-- === BAGIAN KEUNGGULAN SEKOLAH === -->
<section class="features-section">
    <div class="container">
        <h2 class="section-title">Mengapa Memilih Kami?</h2>
        <div class="features-grid">
            <!-- Keunggulan 1 -->
            <div class="feature-item">
                <div class="feature-icon">
                    <!-- Ikon bisa diganti dengan SVG atau FontAwesome jika diinginkan -->
                    <img src="https://placehold.co/64x64/FFD700/000000?text=K" alt="Ikon Kurikulum">
                </div>
                <h3>Kurikulum Terpadu</h3>
                <p>Menggabungkan kurikulum nasional dengan pendidikan diniyah untuk keseimbangan dunia dan akhirat.</p>
            </div>
            <!-- Keunggulan 2 -->
            <div class="feature-item">
                <div class="feature-icon">
                    <img src="https://placehold.co/64x64/FFD700/000000?text=F" alt="Ikon Fasilitas">
                </div>
                <h3>Fasilitas Modern</h3>
                <p>Ruang kelas nyaman, perpustakaan lengkap, dan laboratorium untuk mendukung proses belajar.</p>
            </div>
            <!-- Keunggulan 3 -->
            <div class="feature-item">
                <div class="feature-icon">
                    <img src="https://placehold.co/64x64/FFD700/000000?text=L" alt="Ikon Lingkungan">
                </div>
                <h3>Lingkungan Islami</h3>
                <p>Membiasakan adab dan akhlak Islami dalam setiap kegiatan sehari-hari di lingkungan sekolah.</p>
            </div>
        </div>
    </div>
</section>


<?php 
    // Memanggil file footer
    include '../templates/footer.php'; 
?>
