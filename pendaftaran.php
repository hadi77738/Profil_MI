<?php 
    $page_title = "Pendaftaran"; 
    include 'templates/header.php'; 
?>

<!-- === BAGIAN HEADER HALAMAN === -->
<section class="page-header">
    <div class="container">
        <h1>Penerimaan Siswa Baru</h1>
        <p>Bergabunglah bersama keluarga besar MI Al-Hidayah.</p>
    </div>
</section>

<!-- === BAGIAN ALUR PENDAFTARAN === -->
<section class="registration-flow-section container">
    <h2 class="section-title">Alur Pendaftaran</h2>
    <div class="timeline">
        <!-- Langkah 1 -->
        <div class="timeline-item">
            <div class="timeline-number">1</div>
            <div class="timeline-content">
                <h3>Pengambilan Formulir</h3>
                <p>Orang tua/wali mengambil formulir pendaftaran di kantor administrasi sekolah atau mengunduhnya melalui tautan di bawah.</p>
            </div>
        </div>
        <!-- Langkah 2 -->
        <div class="timeline-item">
            <div class="timeline-number">2</div>
            <div class="timeline-content">
                <h3>Pengembalian Formulir</h3>
                <p>Mengembalikan formulir yang telah diisi lengkap beserta dokumen persyaratan ke kantor administrasi.</p>
            </div>
        </div>
        <!-- Langkah 3 -->
        <div class="timeline-item">
            <div class="timeline-number">3</div>
            <div class="timeline-content">
                <h3>Observasi & Wawancara</h3>
                <p>Calon siswa akan mengikuti tes observasi kesiapan belajar, dan orang tua/wali mengikuti sesi wawancara singkat.</p>
            </div>
        </div>
        <!-- Langkah 4 -->
        <div class="timeline-item">
            <div class="timeline-number">4</div>
            <div class="timeline-content">
                <h3>Pengumuman Hasil</h3>
                <p>Hasil seleksi akan diumumkan di papan pengumuman sekolah dan di website ini pada tanggal yang telah ditentukan.</p>
            </div>
        </div>
        <!-- Langkah 5 -->
        <div class="timeline-item">
            <div class="timeline-number">5</div>
            <div class="timeline-content">
                <h3>Daftar Ulang</h3>
                <p>Orang tua/wali dari siswa yang dinyatakan lulus melakukan proses daftar ulang untuk konfirmasi.</p>
            </div>
        </div>
    </div>
</section>

<!-- === BAGIAN PERSYARATAN & JADWAL === -->
<section class="info-section">
    <div class="container">
        <div class="info-grid">
            <div class="info-column">
                <h3>Persyaratan Dokumen</h3>
                <ul>
                    <li>Fotokopi Akta Kelahiran (2 lembar)</li>
                    <li>Fotokopi Kartu Keluarga (2 lembar)</li>
                    <li>Fotokopi KTP Orang Tua/Wali (2 lembar)</li>
                    <li>Pas Foto berwarna ukuran 3x4 (4 lembar)</li>
                    <li>Surat Keterangan Lulus dari TK/RA (jika ada)</li>
                </ul>
            </div>
            <div class="info-column">
                <h3>Jadwal Penting</h3>
                <ul>
                    <li><strong>Pendaftaran:</strong> 1 Maret - 30 April 2026</li>
                    <li><strong>Observasi & Wawancara:</strong> 5 Mei 2026</li>
                    <li><strong>Pengumuman:</strong> 12 Mei 2026</li>
                    <li><strong>Daftar Ulang:</strong> 13 - 20 Mei 2026</li>
                </ul>
            </div>
        </div>
        <div class="download-section">
            <h2>Unduh Formulir</h2>
            <p>Silakan unduh formulir pendaftaran resmi melalui tombol di bawah ini.</p>
            <!-- Ganti '#' dengan link ke file PDF formulir Anda -->
            <a href="#" class="btn btn-primary">Download Formulir (PDF)</a>
        </div>
    </div>
</section>

<?php 
    include 'templates/footer.php'; 
?>
