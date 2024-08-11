@extends('layouts.app')

@section('title', 'E-Learning')

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link href="{{ asset('css/e-learning.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="e-learning">
    <div class="hero-background"></div>
    <div class="navbar-background">
        <div class="container">
            <a href="/" class="nav-link">Home</a>
            <a href="#" class="nav-link active">E-Learning</a>
            <a href="#" class="nav-link">Discuss Room</a>
            <a href="#" class="nav-link">Mentoring</a>
            <a href="#" class="btn btn-outline-primary">Masuk</a>
            <a href="#" class="btn btn-primary">Daftar</a>
            <div class="logo-container">
                <div class="logo-background"></div>
                <img src="images/jobco fix.png" alt="JobCo Logo" class="logo">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Kuasai Keterampilan Utama, Bangun Portofolio & Bersertifikat</h1>
            <p class="hero-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua.</p>
            <div class="hero-buttons">
                <a href="#" class="btn btn-primary">Mulai Berlangganan</a>
                <a href="#" class="btn btn-warning">Lihat 900+ Materi</a>
            </div>
            <p class="hero-subscriber">2.000+ Orang Berlangganan</p>
        </div>

        <h2 class="section-title">Testimoni Member Jobco</h2>
        <div class="testimoni-carousel">
            @for ($i = 0; $i < 3; $i++)
                <div class="testimoni-card">
                    <div class="testimoni-source">JobCo</div>
                    <p class="testimoni-text">Seneng banget bisa belajar di JobCo! Pembelajarannya asik, materinya pun
                        daging semua. Ga nyesel bisa belajar dan kenal mentor-mentor keren dari JobCo!</p>
                    <div class="testimoni-author">
                        <h3 class="author-name">Christoper Nolance</h3>
                        <span class="author-role">Customer</span>
                    </div>
                    <div class="avatar-container">
                        <div class="avatar-background"></div>
                        <img src="images/avatar.png" alt="Avatar" class="avatar">
                    </div>
                    <img src="images/petik.png" alt="Petik" class="quote-icon">
                </div>
            @endfor
        </div>

        <h2 class="section-title">E-LEARNING</h2>
        <h3 class="section-subtitle">Solusi #1 Kuasai Ratusan Skill Profesional</h3>

        <div class="feature-list">
            @for ($i = 0; $i < 5; $i++)
                <div class="feature-card">
                    <h4 class="feature-title">Belajar Fleksibel dan Bersertifikat</h4>
                    <p class="feature-description">Disusun bertahap dari level dasar hingga lanjutan oleh praktisi industri
                        dari berbagai top companies. Dapatkan e-certificate di tiap materi.</p>
                    <div class="feature-icon"></div>
                </div>
            @endfor
        </div>

        <img src="images/vector3.png" alt="Vector" class="vector-image">

        <h2 class="section-title">Semua Materi</h2>

        <div class="materi-grid">
            @for ($i = 0; $i < 3; $i++)
                <div class="materi-card">
                    <div class="materi-header">
                        <div class="materi-source">JobCo</div>
                        <span class="materi-type">Fullstack Intensive E-Learning</span>
                        <h4 class="materi-title">Surat Lamaran Kerja</h4>
                        <div class="materi-tag">
                            <span>21+ Sesi Online Live & Praktik</span>
                        </div>
                        <ul class="materi-features">
                            <li>Fitur 1</li>
                            <li>Fitur 2</li>
                            <li>Fitur 3</li>
                            <li>Fitur 4</li>
                        </ul>
                        <img src="images/avatar1.png" alt="Avatar" class="materi-avatar">
                    </div>
                    <div class="materi-banner">
                        <span>DAFTAR SEKARANG & DAPATKAN DISKON KHUSUS</span>
                    </div>
                    <div class="materi-content">
                        <h5 class="materi-name">Resume yang Menarik HRD</h5>
                        <div class="materi-info">
                            <span class="materi-videos">5 Video</span>
                            <span class="materi-participants">20.000</span>
                            <span class="materi-rating">4.71/5</span>
                            <div class="rating-stars">
                                <div class="star filled"></div>
                                <div class="star filled"></div>
                                <div class="star filled"></div>
                                <div class="star filled"></div>
                                <div class="star"></div>
                            </div>
                        </div>
                        <div class="materi-pricing">
                            <span class="materi-price">Rp 149.000</span>
                            <span class="materi-discount">71%</span>
                            <span class="materi-original-price">Rp 149.000</span>
                        </div>
                        <a href="#" class="btn btn-primary">Daftar</a>
                    </div>
                </div>
            @endfor
        </div>

        <h2 class="section-title">Mentor</h2>

        <div class="mentor-grid">
            @for ($i = 0; $i < 5; $i++)
                <div class="mentor-card">
                    <img src="images/avatar1.png" alt="Avatar" class="mentor-avatar">
                    <h4 class="mentor-name">Gita Savitri</h4>
                    <p class="mentor-description">Lorem ipsum is simply free dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>
            @endfor
        </div>
    </div>
</section>
@endsection