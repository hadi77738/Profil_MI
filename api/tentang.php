<?php 
    $page_title = "Tentang Kami"; 
    include '../templates/header.php'; 
?>

<!-- === BAGIAN HEADER HALAMAN === -->
<section class="page-header">
    <div class="container">
        <h1><?php echo $page_title; ?></h1>
        <p>Mengenal lebih dekat MI Al-Hidayah, tempat putra-putri Anda bertumbuh.</p>
    </div>
</section>

<!-- === BAGIAN SEJARAH & VISI MISI === -->
<section class="about-content container">
    <div class="about-text">
        <h2>Sejarah Singkat</h2>
        <p>Berdiri sejak tahun 1998, MI Al-Hidayah didirikan atas keprihatinan akan kebutuhan pendidikan dasar Islam yang berkualitas di lingkungan kami. Dimulai dari sebuah bangunan sederhana, berkat dukungan masyarakat dan dedikasi para pendiri, sekolah kami terus berkembang hingga menjadi salah satu lembaga pendidikan dasar Islam yang terpercaya di kota ini.</p>
        
        <h2>Visi Sekolah</h2>
        <p>"Terwujudnya generasi muslim yang cerdas, mandiri, berakhlak mulia, dan berwawasan global berdasarkan nilai-nilai Al-Qur'an dan As-Sunnah."</p>

        <h2>Misi Sekolah</h2>
        <ul>
            <li>Menyelenggarakan pendidikan yang memadukan ilmu pengetahuan, teknologi, dan iman takwa.</li>
            <li>Mengembangkan potensi siswa secara optimal melalui pembelajaran yang kreatif dan inovatif.</li>
            <li>Membina karakter dan akhlakul karimah melalui program pembiasaan dan keteladanan.</li>
            <li>Membangun lingkungan belajar yang aman, nyaman, dan Islami.</li>
        </ul>
    </div>
    <div class="about-image">
        <!-- Ganti dengan foto gedung sekolah atau kegiatan belajar -->
        <img src="assets/images/gedung-sekolah.jpg" alt="Gedung MI Al-Hidayah" onerror="this.onerror=null;this.src='https://placehold.co/500x600/006400/FFFFFF?text=Gedung+Sekolah';">
    </div>
</section>

<!-- === BAGIAN TIM PENGAJAR === -->
<section class="team-section">
    <div class="container">
        <h2 class="section-title">Tim Pengajar Kami</h2>
        <div class="team-grid">
            <!-- Personil 1 -->
            <div class="team-member">
                <img src="assets/images/guru-1.jpg" alt="Foto Guru 1" onerror="this.onerror=null;this.src='https://placehold.co/300x300/e0e0e0/333?text=Foto+Guru';">
                <h3>Aisyah, S.Pd.</h3>
                <p>Wali Kelas IV</p>
            </div>
            <!-- Personil 2 -->
            <div class="team-member">
                <img src="assets/images/guru-2.jpg" alt="Foto Guru 2" onerror="this.onerror=null;this.src='https://placehold.co/300x300/e0e0e0/333?text=Foto+Guru';">
                <h3>Muhammad Yusuf, S.Ag.</h3>
                <p>Guru PAI & Al-Qur'an</p>
            </div>
            <!-- Personil 3 -->
            <div class="team-member">
                <img src="assets/images/guru-3.jpg" alt="Foto Guru 3" onerror="this.onerror=null;this.src='https://placehold.co/300x300/e0e0e0/333?text=Foto+Guru';">
                <h3>Fatima, S.Si.</h3>
                <p>Guru Sains</p>
            </div>
            <!-- Personil 4 -->
            <div class="team-member">
                <img src="assets/images/guru-4.jpg" alt="Foto Guru 4" onerror="this.onerror=null;this.src='https://placehold.co/300x300/e0e0e0/333?text=Foto+Guru';">
                <h3>Ahmad Fauzi, S.Pd.</h3>
                <p>Guru Olahraga</p>
            </div>
        </div>
    </div>
</section>

<?php 
    include '../templates/footer.php'; 
?>
