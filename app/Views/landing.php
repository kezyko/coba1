<?= $this->extend('layouts/epic') ?>

<?= $this->section('title') ?>Sistem Administrasi Tes EPIC<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section" id="hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="hero-badge">
                        <i class="bi bi-star-fill"></i>
                        Gratis Tes Pertama
                    </div>
                    <h1 class="hero-title">
                        Sistem Administrasi <span>Tes EPIC</span>
                    </h1>
                    <p class="hero-subtitle">
                        Portal Administrasi Tes EPIC Polinela. Website ini mengelola pendaftaran, jadwal tes, pembayaran QRIS, serta akses hasil kelulusan dan sertifikat digital.
                    </p>
                    <div class="hero-notice">
                        <i class="bi bi-info-circle-fill"></i>
                        <span>Tes EPIC dilaksanakan secara tatap muka di Laboratorium Bahasa Polinela, bukan tes online.</span>
                    </div>
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
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Sertifikat Diterbitkan</div>
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
                Tentang Sistem
            </div>
            <h2 class="section-title">Apa itu Portal EPIC?</h2>
            <p class="section-subtitle">
                Portal Administrasi EPIC (English Proficiency Integrated Center) adalah sistem layanan administrasi 
                tes kompetensi Bahasa Inggris dari Politeknik Negeri Lampung. Website ini mengelola pendaftaran, 
                jadwal, pembayaran, serta akses hasil dan sertifikat digital.
            </p>
        </div>
        
        <!-- Important Notice -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div class="info-notice-card animate-on-scroll">
                    <div class="info-notice-icon">
                        <i class="bi bi-building-fill"></i>
                    </div>
                    <div class="info-notice-content">
                        <h4>Tes Dilaksanakan Secara Tatap Muka</h4>
                        <p>Proses tes EPIC dilaksanakan secara offline di <strong>Laboratorium Bahasa Politeknik Negeri Lampung</strong>. 
                        Website ini hanya untuk layanan administrasi: pendaftaran, jadwal, pembayaran, dan akses hasil tes serta sertifikat.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6">
                <div class="feature-card animate-on-scroll">
                    <div class="feature-icon blue">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">Pendaftaran Mudah</h3>
                    <p class="feature-description">
                        Daftar tes EPIC secara online melalui portal ini. Pilih jadwal yang tersedia, 
                        lengkapi data, dan lakukan pembayaran dengan mudah.
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
                        Setelah dinyatakan lulus tes, sertifikat dapat diunduh dalam format PDF 
                        yang resmi dan terverifikasi melalui portal ini.
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
                Layanan
            </div>
            <h2 class="section-title">Layanan Portal EPIC</h2>
            <p class="section-subtitle">
                Berbagai layanan administrasi untuk mendukung proses pendaftaran dan sertifikasi tes EPIC Anda.
            </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="testimonial-card animate-on-scroll">
                    <div class="feature-icon blue mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm.256 7a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                        </svg>
                    </div>
                    <h4 class="feature-title">Daftar Tes EPIC</h4>
                    <p class="feature-description">
                        Pendaftaran tes secara online dengan pilihan jadwal yang tersedia di Laboratorium Bahasa.
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
                        Pembayaran mudah melalui QRIS dengan verifikasi oleh admin untuk memastikan keamanan transaksi.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="testimonial-card animate-on-scroll">
                    <div class="feature-icon purple mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                            <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                        </svg>
                    </div>
                    <h4 class="feature-title">Lihat Jadwal Tes</h4>
                    <p class="feature-description">
                        Informasi jadwal tes yang tersedia di Laboratorium Bahasa serta status pendaftaran.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="testimonial-card animate-on-scroll">
                    <div class="feature-icon orange mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
                            <path d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"/>
                        </svg>
                    </div>
                    <h4 class="feature-title">Unduh Sertifikat PDF</h4>
                    <p class="feature-description">
                        Tracking riwayat hasil tes dan unduh sertifikat resmi dalam format PDF setelah dinyatakan lulus.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Additional Service Info -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-mini-card animate-on-scroll">
                    <i class="bi bi-clock-history"></i>
                    <span>Tracking Riwayat Tes</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-mini-card animate-on-scroll">
                    <i class="bi bi-shield-check"></i>
                    <span>Verifikasi Admin</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="service-mini-card animate-on-scroll">
                    <i class="bi bi-gift"></i>
                    <span>Gratis Tes Pertama</span>
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
                Pendapat dari mahasiswa yang telah menggunakan layanan administrasi EPIC untuk pendaftaran dan sertifikasi.
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
                        "Pendaftaran sangat mudah dan cepat. Pembayaran via QRIS langsung diverifikasi admin. Sertifikatnya juga bisa langsung diunduh setelah hasil tes keluar!"
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
                        "Gratis untuk tes pertama sangat membantu mahasiswa. Prosesnya transparan, bisa cek jadwal kapan saja, dan hasil cepat keluar di website!"
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
                        "Sistemnya sangat user-friendly. Bisa akses kapan saja untuk cek status pendaftaran, jadwal tes, dan unduh sertifikat. Praktis sekali!"
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
                Pilih jadwal yang sesuai dengan waktu Anda. Tes dilaksanakan tatap muka di Laboratorium Bahasa Polinela. 
                Pendaftaran dibuka sampai H-3 sebelum tanggal tes.
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
                <div class="schedule-note mt-3 text-center">
                    <p class="text-muted mb-0">
                        <i class="bi bi-geo-alt-fill text-primary"></i> 
                        Lokasi: <strong>Laboratorium Bahasa, Politeknik Negeri Lampung</strong>
                    </p>
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
                Temukan jawaban untuk pertanyaan umum seputar layanan administrasi tes EPIC di bawah ini.
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
                                lengkapi data, dan lakukan pembayaran jika diperlukan. Setelah pendaftaran diverifikasi admin, 
                                Anda akan mendapat konfirmasi untuk mengikuti tes tatap muka di Laboratorium Bahasa.
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
                                Setelah pembayaran berhasil, admin akan melakukan verifikasi dan status 
                                pendaftaran Anda akan terupdate di portal ini.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                Di mana tes EPIC dilaksanakan?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Tes EPIC dilaksanakan secara <strong>tatap muka di Laboratorium Bahasa Politeknik Negeri Lampung</strong>. 
                                Website ini hanya mengelola administrasi pendaftaran, jadwal, pembayaran, serta akses hasil dan sertifikat. 
                                Proses tes tidak dilakukan secara online.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                Bagaimana mengunduh sertifikat?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Setelah dinyatakan lulus tes EPIC, sertifikat dapat diunduh melalui menu 
                                "Riwayat Tes" di dashboard akun Anda. Sertifikat tersedia dalam format PDF 
                                yang sudah terverifikasi dengan QR code dan dapat langsung digunakan untuk 
                                keperluan administrasi akademik maupun profesional.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                Apakah tes pertama benar-benar gratis?
                            </button>
                        </h2>
                        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Ya, tes EPIC pertama untuk mahasiswa aktif Polinela adalah gratis. 
                                Sistem akan melakukan validasi terhadap status kemahasiswaan Anda. 
                                Untuk tes berikutnya (jika diperlukan mengulang), akan dikenakan biaya 
                                sesuai ketentuan yang berlaku.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                Berapa skor minimum untuk lulus EPIC?
                            </button>
                        </h2>
                        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Skor minimum untuk dinyatakan lulus EPIC adalah 450 (setara TOEIC). 
                                Hasil tes akan keluar dalam waktu maksimal 7 hari kerja setelah tes 
                                dilaksanakan. Anda akan mendapat notifikasi melalui email dan dapat mengakses 
                                hasil serta sertifikat melalui portal ini.
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
            <h2 class="cta-title">Siap Mendaftar Tes EPIC?</h2>
            <p class="cta-subtitle">
                Daftar sekarang untuk mengikuti tes EPIC di Laboratorium Bahasa Polinela. 
                Gratis untuk tes pertama!
            </p>
            <div class="d-flex gap-3 justify-content-center flex-wrap">
                <a href="#" class="btn-cta">
                    <i class="bi bi-person-plus-fill"></i>
                    Daftar Sekarang
                </a>
                <a href="#" class="btn-secondary-epic-light">
                    <i class="bi bi-search"></i>
                    Cek Status Pendaftaran
                </a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
