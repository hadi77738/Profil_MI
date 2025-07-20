<?php
    if (!isset($base_url)) {
        $base_url = '/profil_mi/';
    }
?>
</main>

<footer class="main-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <h3>MI Al-Hidayah</h3>
                <p>Mencetak generasi cerdas, berakhlak mulia, dan siap menghadapi masa depan.</p>
            </div>
            
            <div class="footer-column">
                <h3>Tautan Cepat</h3>
                <ul>
                    <li><a href="<?php echo $base_url; ?>tentang.php">Profil Sekolah</a></li>
                    <li><a href="<?php echo $base_url; ?>akademik.php">Program Akademik</a></li>
                    <li><a href="<?php echo $base_url; ?>pendaftaran.php">Info Pendaftaran</a></li>
                    <li><a href="<?php echo $base_url; ?>berita.php">Berita Sekolah</a></li>
                </ul>
            </div>

            <div class="footer-column">
                <h3>Hubungi Kami</h3>
                <p>
                    Jl. Pendidikan No. 123, Kota Harapan<br>
                    Email: info@mi-alhidayah.sch.id<br>
                    Telepon: (021) 123-4567
                </p>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> MI Al-Hidayah. Semua Hak Cipta Dilindungi.</p>
    </div>
</footer>

<!-- Lightbox2 JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

<!-- Link ke file JavaScript utama kita -->
<script src="<?php echo $base_url; ?>assets/js/script.js"></script>

</body>
</html>
