<?php 
    $page_title = "Akademik"; 
    include 'templates/header.php'; 
?>

<!-- === BAGIAN HEADER HALAMAN === -->
<section class="page-header">
    <div class="container">
        <h1><?php echo $page_title; ?></h1>
        <p>Program pendidikan dan kegiatan penunjang prestasi siswa.</p>
    </div>
</section>

<!-- === BAGIAN KURIKULUM === -->
<section class="curriculum-section container">
    <div class="section-content">
        <h2>Struktur Kurikulum</h2>
        <p>MI Al-Hidayah menerapkan <strong>Kurikulum Merdeka</strong> yang dipadukan dengan kurikulum internal keislaman. Pendekatan ini dirancang untuk mengembangkan kompetensi siswa sesuai dengan minat dan bakat mereka, sambil memperkuat pemahaman aqidah, akhlak, dan ibadah.</p>
        
        <h3>Mata Pelajaran Unggulan:</h3>
        <ul>
            <li>Tahfidz Al-Qur'an (Target hafalan 2 Juz setelah lulus)</li>
            <li>Bahasa Arab (Komunikasi aktif)</li>
            <li>Fiqih Ibadah Praktis</li>
            <li>Sains dan Teknologi berbasis Proyek</li>
        </ul>
    </div>
</section>

<!-- === BAGIAN EKSTRAKURIKULER === -->
<section class="extracurricular-section">
    <div class="container">
        <h2 class="section-title">Kegiatan Ekstrakurikuler</h2>
        <p class="section-subtitle">Kami menyediakan beragam kegiatan untuk menyalurkan minat dan bakat siswa di luar jam pelajaran.</p>
        <div class="extracurricular-grid">
            <!-- Ekskul 1 -->
            <div class="extracurricular-item">
                <img src="assets/images/ekskul-pramuka.jpg" alt="Kegiatan Pramuka" onerror="this.onerror=null;this.src='https://placehold.co/400x300/006400/FFFFFF?text=Pramuka';">
                <div class="item-content">
                    <h3>Pramuka</h3>
                    <p>Membentuk karakter mandiri, disiplin, dan cinta alam.</p>
                </div>
            </div>
            <!-- Ekskul 2 -->
            <div class="extracurricular-item">
                <img src="assets/images/ekskul-kaligrafi.jpg" alt="Kegiatan Kaligrafi" onerror="this.onerror=null;this.src='https://placehold.co/400x300/006400/FFFFFF?text=Kaligrafi';">
                <div class="item-content">
                    <h3>Seni Kaligrafi</h3>
                    <p>Mengasah kreativitas dan kecintaan pada seni Islam.</p>
                </div>
            </div>
            <!-- Ekskul 3 -->
            <div class="extracurricular-item">
                <img src="assets/images/ekskul-futsal.jpg" alt="Kegiatan Futsal" onerror="this.onerror=null;this.src='https.placehold.co/400x300/006400/FFFFFF?text=Futsal';">
                <div class="item-content">
                    <h3>Futsal</h3>
                    <p>Mengembangkan sportivitas, kerja sama tim, dan kesehatan jasmani.</p>
                </div>
            </div>
            <!-- Ekskul 4 -->
            <div class="extracurricular-item">
                <img src="assets/images/ekskul-tahfidz.jpg" alt="Kegiatan Klub Tahfidz" onerror="this.onerror=null;this.src='https.placehold.co/400x300/006400/FFFFFF?text=Tahfidz';">
                <div class="item-content">
                    <h3>Klub Tahfidz</h3>
                    <p>Memperdalam hafalan Al-Qur'an dengan metode yang menyenangkan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
    include 'templates/footer.php'; 
?>
