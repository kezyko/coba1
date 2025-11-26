<?= $this->extend('layouts/epic') ?>

<?= $this->section('title') ?>Ujian EPIC Online<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section" id="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="hero-badge">
                        <i class="bi bi-star-fill"></i>
                        Gratis Ujian Pertama
                    </div>
                    <h1 class="hero-title">
                        Ujian <span>EPIC</span> Online
                    </h1>
                    <p class="hero-subtitle">
                        Langkah Mudah Menuju Kompetensi Bahasa Inggris Global. 
                        Sistem terintegrasi, efisien, dengan sertifikat digital dan pendaftaran yang mudah.
                    </p>
                    <div class="hero-buttons">
                        <a href="#daftar" class="btn-primary-epic">
                            <i class="bi bi-person-plus-fill"></i>
                            Daftar Sekarang
                        </a>
                        <a href="#jadwal" class="btn-secondary-epic">
                            <i class="bi bi-calendar3"></i>
                            Lihat Jadwal
                        </a>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number">1.000+</div>
                            <div class="stat-label">Mahasiswa Terdaftar</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-label">Tingkat Kepuasan</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Akses Online</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image">
                    <div class="hero-illustration">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5Z"/>
                            <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Z"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="scroll-indicator">
        <a href="#tentang" aria-label="Scroll ke bawah">
            <i class="bi bi-chevron-down fs-4 text-primary"></i>
        </a>
    </div>
</section>

<!-- About Section -->
<section class="features-section" id="tentang">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge">
                <i class="bi bi-info-circle-fill"></i>
                Tentang EPIC
            </div>
            <h2 class="section-title">Apa itu EPIC?</h2>
            <p class="section-subtitle">
                EPIC (English Proficiency Integrated Center) adalah sistem ujian kompetensi Bahasa Inggris online 
                yang terintegrasi dari Politeknik Negeri Lampung untuk membantu mahasiswa mencapai standar 
                kompetensi bahasa internasional.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon blue">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437z"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">Ujian Berbasis Online</h3>
                    <p class="feature-description">
                        Dulu manual dan memakan waktu, sekarang terintegrasi! Ujian dapat dilakukan secara online 
                        kapan saja dan di mana saja dengan perangkat yang terhubung internet.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon green">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                            <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">Sertifikat Digital</h3>
                    <p class="feature-description">
                        Hasil ujian langsung terintegrasi dengan sistem akademik. Sertifikat dapat diunduh 
                        dalam format PDF yang resmi dan terverifikasi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="testimonials-section" id="fitur">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge">
                <i class="bi bi-gear-fill"></i>
                Keunggulan
            </div>
            <h2 class="section-title">Fitur Unggulan EPIC</h2>
            <p class="section-subtitle">
                Sistem modern dengan berbagai kemudahan untuk mendukung proses ujian kompetensi Bahasa Inggris Anda.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="testimonial-card animate-on-scroll">
                    <div class="feature-icon blue mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5ZM3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.58 26.58 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.933.933 0 0 1-.765.935c-.845.147-2.34.346-4.235.346-1.895 0-3.39-.2-4.235-.346A.933.933 0 0 1 3 9.219V8.062Zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a24.767 24.767 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25.286 25.286 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135Z"/>
                            <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2V1.866ZM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5Z"/>
                        </svg>
                    </div>
                    <h4 class="feature-title">Tes EPIC Terpusat Online</h4>
                    <p class="feature-description">
                        Sistem ujian yang terintegrasi dan terpusat dengan manajemen soal yang terstandarisasi.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="testimonial-card animate-on-scroll">
                    <div class="feature-icon green mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
                        </svg>
                    </div>
                    <h4 class="feature-title">Pembayaran QRIS</h4>
                    <p class="feature-description">
                        Pendaftaran dan pembayaran mudah dengan QRIS. Validasi otomatis tanpa perlu konfirmasi manual.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="testimonial-card animate-on-scroll">
                    <div class="feature-icon purple mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                            <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"/>
                        </svg>
                    </div>
                    <h4 class="feature-title">Unduh Sertifikat PDF</h4>
                    <p class="feature-description">
                        Tracking riwayat tes dan unduh sertifikat resmi dalam format PDF kapan saja.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="testimonial-card animate-on-scroll">
                    <div class="feature-icon orange mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499L12.136.326zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484L5.562 3zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z"/>
                        </svg>
                    </div>
                    <h4 class="feature-title">Gratis Ujian Pertama</h4>
                    <p class="feature-description">
                        Bebas biaya untuk ujian pertama dengan validasi otomatis status mahasiswa aktif.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-banner">
    <div class="container">
        <div class="stats-grid">
            <div class="stats-item animate-on-scroll">
                <div class="stats-number">1.000+</div>
                <div class="stats-label">Mahasiswa Terdaftar</div>
            </div>
            <div class="stats-item animate-on-scroll">
                <div class="stats-number">500+</div>
                <div class="stats-label">Sertifikat Diterbitkan</div>
            </div>
            <div class="stats-item animate-on-scroll">
                <div class="stats-number">98%</div>
                <div class="stats-label">Tingkat Kepuasan</div>
            </div>
            <div class="stats-item animate-on-scroll">
                <div class="stats-number">5</div>
                <div class="stats-label">Jurusan Tergabung</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="features-section">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge">
                <i class="bi bi-chat-quote-fill"></i>
                Testimoni
            </div>
            <h2 class="section-title">Apa Kata Mereka?</h2>
            <p class="section-subtitle">
                Pendapat dari mahasiswa yang telah menggunakan sistem EPIC untuk ujian kompetensi Bahasa Inggris.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="testimonial-card animate-on-scroll">
                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">
                        "Pendaftaran sangat mudah dan cepat. Pembayaran via QRIS langsung terverifikasi otomatis. Sertifikatnya juga bisa langsung diunduh setelah lulus!"
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">RA</div>
                        <div class="testimonial-info">
                            <h5>Rizky Ananda</h5>
                            <p>Mahasiswa TI 2022</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card animate-on-scroll">
                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p class="testimonial-text">
                        "Gratis untuk ujian pertama sangat membantu mahasiswa. Prosesnya transparan dan hasilnya cepat keluar. Recommended!"
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">SP</div>
                        <div class="testimonial-info">
                            <h5>Siti Pratiwi</h5>
                            <p>Mahasiswa Akuntansi 2021</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card animate-on-scroll">
                    <div class="testimonial-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                    </div>
                    <p class="testimonial-text">
                        "Sistem online-nya sangat user-friendly. Bisa akses kapan saja untuk cek status dan jadwal. Ini yang kita butuhkan!"
                    </p>
                    <div class="testimonial-author">
                        <div class="testimonial-avatar">DH</div>
                        <div class="testimonial-info">
                            <h5>Dimas Hartono</h5>
                            <p>Mahasiswa Mesin 2023</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Schedule Section -->
<section class="testimonials-section" id="jadwal">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge">
                <i class="bi bi-calendar-event-fill"></i>
                Jadwal Tes
            </div>
            <h2 class="section-title">Jadwal Tes EPIC</h2>
            <p class="section-subtitle">
                Pilih jadwal yang sesuai dengan waktu Anda. Pendaftaran dibuka sampai H-3 sebelum tanggal ujian.
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="table-responsive">
                    <table class="table table-hover bg-white rounded-4 overflow-hidden shadow">
                        <thead class="table-primary">
                            <tr>
                                <th class="py-3 px-4">Periode</th>
                                <th class="py-3 px-4">Tanggal</th>
                                <th class="py-3 px-4">Waktu</th>
                                <th class="py-3 px-4">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3 px-4">Periode 1</td>
                                <td class="py-3 px-4">15 Januari 2025</td>
                                <td class="py-3 px-4">08.00 - 12.00</td>
                                <td class="py-3 px-4"><span class="badge bg-success">Dibuka</span></td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Periode 2</td>
                                <td class="py-3 px-4">12 Februari 2025</td>
                                <td class="py-3 px-4">08.00 - 12.00</td>
                                <td class="py-3 px-4"><span class="badge bg-warning text-dark">Segera</span></td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Periode 3</td>
                                <td class="py-3 px-4">19 Maret 2025</td>
                                <td class="py-3 px-4">08.00 - 12.00</td>
                                <td class="py-3 px-4"><span class="badge bg-secondary">Akan Datang</span></td>
                            </tr>
                            <tr>
                                <td class="py-3 px-4">Periode 4</td>
                                <td class="py-3 px-4">16 April 2025</td>
                                <td class="py-3 px-4">08.00 - 12.00</td>
                                <td class="py-3 px-4"><span class="badge bg-secondary">Akan Datang</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-4">
                    <a href="#daftar" class="btn-primary-epic">
                        <i class="bi bi-person-plus-fill"></i>
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section" id="faq">
    <div class="container">
        <div class="text-center mb-5">
            <div class="section-badge">
                <i class="bi bi-question-circle-fill"></i>
                FAQ
            </div>
            <h2 class="section-title">Pertanyaan Sering Ditanyakan</h2>
            <p class="section-subtitle">
                Temukan jawaban untuk pertanyaan umum seputar ujian EPIC di bawah ini.
            </p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion faq-accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                Bagaimana cara mendaftar tes EPIC?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Untuk mendaftar tes EPIC, Anda cukup klik tombol "Daftar Sekarang" di halaman ini, 
                                kemudian login menggunakan akun SIAKAD Polinela. Pilih jadwal yang tersedia, 
                                lengkapi data, dan lakukan pembayaran jika diperlukan. Status pendaftaran akan 
                                langsung terverifikasi secara otomatis.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                Bagaimana proses pembayaran?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Pembayaran dilakukan melalui QRIS yang dapat discan menggunakan aplikasi e-wallet 
                                atau mobile banking Anda (OVO, GoPay, Dana, ShopeePay, atau m-banking). 
                                Setelah pembayaran berhasil, sistem akan melakukan validasi otomatis dan status 
                                pendaftaran Anda akan langsung terupdate.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                Bagaimana mengunduh sertifikat?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Setelah dinyatakan lulus ujian EPIC, sertifikat dapat diunduh melalui menu 
                                "Riwayat Tes" di dashboard akun Anda. Sertifikat tersedia dalam format PDF 
                                yang sudah terverifikasi dengan QR code dan dapat langsung digunakan untuk 
                                keperluan administrasi akademik maupun profesional.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                Apakah ujian pertama benar-benar gratis?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ya, ujian EPIC pertama untuk mahasiswa aktif Polinela adalah gratis. 
                                Sistem akan melakukan validasi otomatis terhadap status kemahasiswaan Anda. 
                                Untuk ujian berikutnya (jika diperlukan mengulang), akan dikenakan biaya 
                                sesuai ketentuan yang berlaku.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                Berapa skor minimum untuk lulus EPIC?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Skor minimum untuk dinyatakan lulus EPIC adalah 450 (setara TOEIC). 
                                Hasil ujian akan keluar dalam waktu maksimal 7 hari kerja setelah ujian 
                                dilaksanakan. Anda akan mendapat notifikasi melalui email dan dapat mengecek 
                                hasil melalui dashboard akun.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="daftar">
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">Siap Mengambil Langkah Pertama?</h2>
            <p class="cta-subtitle">
                Daftar sekarang dan mulai perjalanan Anda menuju kompetensi Bahasa Inggris global. 
                Gratis untuk ujian pertama!
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="#" class="btn-cta">
                    <i class="bi bi-person-plus-fill"></i>
                    Daftar Sekarang
                </a>
                <a href="#" class="btn-secondary-epic" style="background: transparent; border-color: white; color: white;">
                    <i class="bi bi-search"></i>
                    Cek Status Pendaftaran
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
