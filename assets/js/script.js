// Menunggu hingga seluruh konten halaman dimuat sebelum menjalankan skrip
document.addEventListener('DOMContentLoaded', function() {

    // Ambil elemen tombol hamburger dan menu navigasi
    const hamburger = document.getElementById('hamburger-menu');
    const navMenu = document.querySelector('.main-nav');

    // Pastikan kedua elemen ada sebelum menambahkan event listener
    if (hamburger && navMenu) {
        // Tambahkan event listener 'click' pada tombol hamburger
        hamburger.addEventListener('click', function() {
            // Toggle (tambah/hapus) kelas 'active' pada menu navigasi
            // Kelas 'active' ini akan memicu CSS untuk menampilkan menu dari samping
            navMenu.classList.toggle('active');

            // Optional: Tambahkan kelas ke hamburger untuk mengubahnya menjadi 'X'
            hamburger.classList.toggle('is-active');
        });
    }

});

// === FUNGSI FILTER GALERI ===
document.addEventListener('DOMContentLoaded', function() {
    const filterContainer = document.querySelector('.filter-buttons');
    
    // Hanya jalankan skrip jika kita berada di halaman yang memiliki filter
    if (filterContainer) {
        const filterButtons = filterContainer.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Hapus kelas 'active' dari semua tombol
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Tambahkan kelas 'active' ke tombol yang di-klik
                button.classList.add('active');

                const filterValue = button.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-category');
                    
                    // Jika filter adalah 'all' atau kategori item cocok dengan filter
                    if (filterValue === 'all' || itemCategory === filterValue) {
                        item.classList.remove('hide');
                    } else {
                        item.classList.add('hide');
                    }
                });
            });
        });
    }
});
