@extends('layouts.app')

@section('title', 'Mentoring')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/mentor.css') }}">
@endsection

@section('content')
<section class="hero-section py-5" style="background-color: #f4eef7;">
    <div class="container text-center">
        <h1 class="hero-title font-weight-bold">
            Bootcamp yang Memberi Hasil. Fokus Praktik & Portofolio
        </h1>
        <p class="lead">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
        </p>
        <p class="small font-weight-bold text-danger">2.000+ Orang Telah Bergabung</p>
        <a href="#" class="btn btn-primary px-4 py-2">Mulai Berlangganan</a>
        <a href="#" class="btn btn-warning px-4 py-2 ml-3">Lihat 900+ Materi</a>
    </div>
</section>

<section class="testimoni-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Testimoni Peserta Mentoring JobCo</h2>
        <div class="testimoni-carousel">
            @for ($i = 0; $i < 3; $i++)
                <div class="testimoni-item px-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="card-text">
                                "Seneng banget bisa belajar di JobCo! Pembelajarannya asik, materinya pun daging
                                semua. Ga nyesel bisa belajar dan kenal mentor-mentor keren dari JobCo!"
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h5 class="card-title font-weight-bold">Christoper Nolance</h5>
                                    <p class="card-subtitle text-muted small">Customer</p>
                                </div>
                                <img src="{{ asset('path/to/avatar.jpg') }}" alt="Avatar" class="rounded-circle"
                                    style="width: 50px; height: 50px;">
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<section class="program-section py-5">
    <div class="container">
        <h2 class="text-center mb-4">Tentang Program</h2>
        <div class="row">
            <div class="col-12">
                <p class="lead text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    dan dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exeritation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="benefit-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Benefit</h2>
        <div class="row">
            <div class="col-12">
                <p class="lead text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="target-section py-5">
    <div class="container">
        <h2 class="text-center mb-4">Untuk Siapa Saja</h2>
        <div class="row">
            <div class="col-12">
                <p class="lead text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-md-4 text-center mb-4">
                    <img src="{{ asset('path/to/icon.png') }}" alt="Icon" style="width: 30px; height: 30px;">
                    <p class="mt-2">Mahasiswa</p>
                </div>
            @endfor
        </div>
    </div>
</section>

<section class="pricing-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Harga Program</h2>
        <div class="row">
            <div class="col-12">
                <p class="lead text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                </p>
            </div>
        </div>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-md-4 mb-4">
                    <div class="card pricing-card">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-center">Integer Nec Sapien</h5>
                            <ul class="list-group list-group-flush">
                                @for ($j = 0; $j < 8; $j++)
                                    <li class="list-group-item d-flex align-items-center">
                                        <img src="{{ asset('path/to/check-icon.png') }}" alt="Check Icon"
                                            style="width: 15px; height: 15px;">
                                        <span class="ml-2">Fitur Program {{ $j + 1 }}</span>
                                    </li>
                                @endfor
                            </ul>
                            <div class="text-center mt-4">
                                <p class="card-text font-weight-bold text-danger price">Rp 49.000</p>
                                <p class="card-text small text-muted text-decoration-line-through original-price">Rp 149.000
                                </p>
                                <a href="#" class="btn btn-primary btn-sm px-3">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<section class="benefit-details py-5">
    <div class="container">
        <h2 class="text-center mb-4">Benefit Detail</h2>
        <div class="benefit-carousel">
            @for ($i = 0; $i < 3; $i++)
                <div class="benefit-item px-3">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <img src="{{ asset('path/to/placeholder-image.jpg') }}" alt="Gambar Benefit"
                                    class="rounded-circle" style="width: 100px; height: 100px;">
                            </div>
                            <h5 class="card-title font-weight-bold text-center mt-3">Judul Benefit {{ $i + 1 }}</h5>
                            <p class="card-text text-muted text-center">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</p>
                            <p class="card-text text-muted text-center small">7.243 pengguna</p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<section class="program-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Program Mentoring</h2>
        <div class="row">
            @php $programCounter = 1; @endphp
            @for ($i = 0; $i < 12; $i++)
                <div class="col-md-4 mb-4">
                    <div class="card program-card">
                        <div class="card-img-top program-image">
                            <img src="{{ asset('path/to/placeholder-image.jpg') }}" alt="Gambar Program" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <div class="program-number d-flex justify-content-center align-items-center rounded-circle bg-primary text-white"
                                style="width: 30px; height: 30px;">
                                {{ $programCounter++ }}
                            </div>
                            <h5 class="card-title font-weight-bold mt-3">Judul Program {{ $i + 1 }}</h5>
                            <p class="card-text small text-muted">Kategori Program</p>
                            <p class="card-text font-weight-bold text-danger price">Rp 149.000</p>
                            <p class="card-text small text-muted text-decoration-line-through original-price">Rp 299.000</p>
                            <a href="#" class="btn btn-primary btn-sm px-3">Beli</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<section class="mentor-section py-5">
    <div class="container">
        <h2 class="text-center mb-4">Mentor</h2>
        <div class="mentor-carousel">
            @for ($i = 0; $i < 6; $i++)
                <div class="mentor-item px-3">
                    <div class="card">
                        <img src="{{ asset('path/to/avatar.jpg') }}" alt="Foto Mentor" class="card-img-top mentor-photo">
                        <div class="card-body text-center">
                            <h5 class="card-title font-weight-bold">Nama Mentor {{ $i + 1 }}</h5>
                            <p class="card-text text-muted small">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<footer class="footer py-5">
    <div class="container-xl">
        <div class="footer-info">
            <div class="footer-logo">JobCo</div>
            <div class="footer-contact">
                <div><i class="fas fa-map-marker-alt mr-2"></i>Jl. Simprug Golf 8 No.6, RT.2/RW.8, Grogol Sel., Kec.
                    Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12220</div>
                <div><i class="fas fa-envelope mr-2"></i>info@jobco.com</div>
                <div><i class="fas fa-phone mr-2"></i>+62123 4567 8910</div>
            </div>
            <a href="#" class="footer-maps">Lihat di Google Maps</a>
        </div>
        <div class="footer-social">
            <a href="#"><img src="{{ asset('path/to/youtube.svg') }}" alt="YouTube"></a>
            <a href="#"><img src="{{ asset('path/to/twitter.svg') }}" alt="Twitter"></a>
            <a href="#"><img src="{{ asset('path/to/linkedin.svg') }}" alt="LinkedIn"></a>
            <a href="#"><img src="{{ asset('path/to/instagram.svg') }}" alt="Instagram"></a>
            <a href="#"><img src="{{ asset('path/to/tiktok.svg') }}" alt="TikTok"></a>
        </div>
    </div>
    <div class="container-xl">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5>JOBCO</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Tentang</a></li>
                    <li><a href="#">Karir</a></li>
                    <li><a href="#">Kerjasama</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h5>PRODUK</h5>
                <ul class="list-unstyled">
                    <li><a href="#">E-learning</a></li>
                    <li><a href="#">Bootcamp</a></li>
                    <li><a href="#">Review CV</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h5>BANTUAN DAN PANDUAN</h5>
                <ul class="list-unstyled">
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Syarat dan Ketentuan</a></li>
                    <li><a href="#">Ketentuan Privasi</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center mt-4">
        © 2023 JobCo. All Rights Reserved.
    </div>
</footer>

@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('.testimoni-carousel').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        $('.mentor-carousel').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });

        $('.benefit-carousel').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: true,
            dots: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
</script>
@endsection