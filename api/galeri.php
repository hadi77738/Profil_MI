<?php 
    $page_title = "Galeri"; 
    include 'templates/header.php'; 
?>

<!-- === BAGIAN HEADER HALAMAN === -->
<section class="page-header">
    <div class="container">
        <h1>Galeri Kegiatan</h1>
        <p>Momen-momen berharga yang terekam di MI Al-Hidayah.</p>
    </div>
</section>

<!-- === BAGIAN GALERI === -->
<section class="gallery-section container">
    <!-- Tombol Filter -->
    <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all">Semua</button>
        <button class="filter-btn" data-filter="belajar">Kegiatan Belajar</button>
        <button class="filter-btn" data-filter="acara">Acara Sekolah</button>
        <button class="filter-btn" data-filter="fasilitas">Fasilitas</button>
    </div>

    <!-- Grid Foto -->
    <div class="gallery-grid">
        <!-- Foto 1 -->
        <div class="gallery-item" data-category="belajar">
            <a href="assets/images/galeri-belajar-1.jpg" data-lightbox="gallery">
                <img src="assets/images/galeri-belajar-1.jpg" alt="Siswa belajar di kelas" onerror="this.onerror=null;this.src='https://placehold.co/400x400/006400/FFFFFF?text=Belajar+1';">
            </a>
        </div>
        <!-- Foto 2 -->
        <div class="gallery-item" data-category="acara">
            <a href="assets/images/galeri-acara-1.jpg" data-lightbox="gallery">
                <img src="assets/images/galeri-acara-1.jpg" alt="Peringatan Hari Kemerdekaan" onerror="this.onerror=null;this.src='https://placehold.co/400x400/006400/FFFFFF?text=Acara+1';">
            </a>
        </div>
        <!-- Foto 3 -->
        <div class="gallery-item" data-category="fasilitas">
            <a href="assets/images/galeri-fasilitas-1.jpg" data-lightbox="gallery">
                <img src="assets/images/galeri-fasilitas-1.jpg" alt="Perpustakaan sekolah" onerror="this.onerror=null;this.src='https://placehold.co/400x400/006400/FFFFFF?text=Perpustakaan';">
            </a>
        </div>
        <!-- Foto 4 -->
        <div class="gallery-item" data-category="belajar">
            <a href="assets/images/galeri-belajar-2.jpg" data-lightbox="gallery">
                <img src="assets/images/galeri-belajar-2.jpg" alt="Praktikum di laboratorium" onerror="this.onerror=null;this.src='https://placehold.co/400x400/006400/FFFFFF?text=Lab';">
            </a>
        </div>
        <!-- Foto 5 -->
        <div class="gallery-item" data-category="fasilitas">
            <a href="assets/images/galeri-fasilitas-2.jpg" data-lightbox="gallery">
                <img src="assets/images/galeri-fasilitas-2.jpg" alt="Lapangan olahraga" onerror="this.onerror=null;this.src='https://placehold.co/400x400/006400/FFFFFF?text=Lapangan';">
            </a>
        </div>
        <!-- Foto 6 -->
        <div class="gallery-item" data-category="acara">
            <a href="assets/images/galeri-acara-2.jpg" data-lightbox="gallery">
                <img src="assets/images/galeri-acara-2.jpg" alt="Kegiatan Manasik Haji" onerror="this.onerror=null;this.src='https://placehold.co/400x400/006400/FFFFFF?text=Manasik';">
            </a>
        </div>
         <!-- Foto 7 -->
        <div class="gallery-item" data-category="belajar">
            <a href="assets/images/galeri-belajar-3.jpg" data-lightbox="gallery">
                <img src="assets/images/galeri-belajar-3.jpg" alt="Siswa membaca di pojok baca" onerror="this.onerror=null;this.src='https://placehold.co/400x400/006400/FFFFFF?text=Membaca';">
            </a>
        </div>
         <!-- Foto 8 -->
        <div class="gallery-item" data-category="acara">
            <a href="assets/images/galeri-acara-3.jpg" data-lightbox="gallery">
                <img src="assets/images/galeri-acara-3.jpg" alt="Pentas Seni Akhir Tahun" onerror="this.onerror=null;this.src='https://placehold.co/400x400/006400/FFFFFF?text=Pensi';">
            </a>
        </div>
    </div>
</section>

<?php 
    // Kita akan menambahkan link ke library Lightbox2 di footer untuk efek popup gambar
    // Tapi untuk sekarang, kita panggil footer standar dulu.
    include 'templates/footer.php'; 
?>
