<?php 
    $page_title = "Kontak"; 
    include '../templates/header.php'; 
?>

<!-- === BAGIAN HEADER HALAMAN === -->
<section class="page-header">
    <div class="container">
        <h1>Hubungi Kami</h1>
        <p>Kami siap menjawab pertanyaan Anda seputar MI Al-Hidayah.</p>
    </div>
</section>

<!-- === BAGIAN KONTAK & PETA === -->
<section class="contact-section container">
    <div class="contact-grid">
        <!-- Kolom Informasi Kontak -->
        <div class="contact-info">
            <h2>Informasi Kontak</h2>
            <p>Jangan ragu untuk menghubungi kami melalui detail di bawah ini atau datang langsung ke sekolah kami pada jam kerja.</p>
            
            <div class="info-item">
                <h3>Alamat</h3>
                <p>Jl. Pendidikan No. 123, Kota Harapan, 12345, Indonesia</p>
            </div>
            
            <div class="info-item">
                <h3>Email</h3>
                <p>info@mi-alhidayah.sch.id</p>
            </div>

            <div class="info-item">
                <h3>Telepon</h3>
                <p>(021) 123-4567</p>
            </div>

            <div class="info-item">
                <h3>Jam Kerja</h3>
                <p>Senin - Jumat: 07.00 - 15.00 WIB</p>
            </div>
        </div>

        <!-- Kolom Peta -->
        <div class="contact-map">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322223!2d106.8195938147689!3d-6.194420195514931!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f42453472f61%3A0x86646e365851418b!2sMonumen%20Nasional!5e0!3m2!1sid!2sid!4v1678886450123!5m2!1sid!2sid" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>

<?php 
    include '../templates/footer.php'; 
?>
