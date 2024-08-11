@extends('layouts.app')

@section('title', 'Discuss Room')

@section('content')

<section class="hero-section">
    <div class="container">
        <h1 class="hero-title">Diskusi yang Memberi Hasil. Tips dan Trik dari Para Ahli</h1>
        <p class="hero-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.
        </p>
        <div class="hero-cta">
            <a href="#" class="btn btn-primary">Mulai Berlangganan</a>
            <a href="#" class="btn btn-secondary">Lihat 900+ Materi</a>
        </div>
        <p class="small font-weight-bold text-danger mt-3">2.000+ Orang Berlangganan</p>
    </div>
</section>

<section class="testimoni-section">
    <div class="container">
        <h2 class="text-center mb-4">Testimoni Alumni Discuss Room JobCo</h2>
        <div class="testimoni-carousel">
            @for ($i = 0; $i < 3; $i++)
                <div class="testimoni-item">
                    <div class="card testimoni-card">
                        <div class="testimoni-content">
                            <p>
                                "Seneng banget bisa belajar di JobCo! Pembelajarannya asik, materinya pun daging semua.
                                Ga nyesel bisa belajar dan kenal mentor-mentor keren dari JobCo!"
                            </p>
                            <p class="testimoni-author">Christoper Nolance</p>
                            <p class="testimoni-role">Customer</p>
                        </div>
                        <img src="{{ asset('path/to/avatar.jpg') }}" alt="Avatar" class="testimoni-avatar">
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<section class="program-section">
    <div class="container">
        <h2 class="text-center mb-4">Program Discuss Room</h2>
        <div class="program-grid">
            @php $programCounter = 1; @endphp
            @for ($i = 0; $i < 12; $i++)
                <div class="program-card">
                    <div class="program-number">
                        {{ $programCounter++ }}
                    </div>
                    <h3 class="program-title">Judul Program {{ $i + 1 }}</h3>
                    <p class="program-description">Kategori Program</p>
                    <p class="program-price">Rp 149.000</p>
                    <p class="program-original-price text-muted text-decoration-line-through">Rp 299.000</p>
                    <button class="btn btn-primary">Beli</button>
                </div>
            @endfor
        </div>
    </div>
</section>

<section class="mentor-section">
    <div class="container">
        <h2 class="text-center mb-4">Mentor</h2>
        <div class="mentor-carousel">
            @for ($i = 0; $i < 6; $i++)
                <div class="mentor-item">
                    <div class="card mentor-card">
                        <img src="{{ asset('path/to/mentor.jpg') }}" alt="Foto Mentor" class="card-img-top">
                        <div class="card-body">
                            <h3 class="mentor-name">Nama Mentor {{ $i + 1 }}</h3>
                            <p class="mentor-description">
                                Lorem ipsum is simply free dummy text of the printing and amet con piscing.
                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

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
    });
</script>
@endsection