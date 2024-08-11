@extends('layouts.app')

@section('header')
<header>
  <div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <h1 class="page-title justify-content-center mt-3 fs-1">
            Mulai Karir Bersama JobCo
          </h1>
        </div>
      </div>
    </div>
  </div>
</header>
@endsection

@section('content')
<div class="page-body">
  <div class="container-xl">
    <div class="row row-deck row-cards justify-content-center">
      <div class="col-sm-6 col-lg-2">
        <div class="card">
          <div class="card-body text-center">
            <img src="/img/image 54.png" alt="Laptop Icon" class="img-fluid">
            <h5 class="card-title mt-3">Lebih dari 1.2 Juta+ Pengguna</h5>
            <p class="card-text">Belajar Bersama</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-2">
        <div class="card">
          <div class="card-body text-center">
            <img src="/img/image 51.png" alt="Mentor Icon" class="img-fluid">
            <h5 class="card-title mt-3">Akses ke Mentor</h5>
            <p class="card-text">Berpengalaman</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-2">
        <div class="card">
          <div class="card-body text-center">
            <img src="/img/image 57.png" alt="Community Icon" class="img-fluid">
            <h5 class="card-title mt-3">Komunitas Aktif Memberikan</h5>
            <p class="card-text">Dukungan untuk Berkembang</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-2">
        <div class="card">
          <div class="card-body text-center">
            <img src="/img/image 53.png" alt="Training Icon" class="img-fluid">
            <h5 class="card-title mt-3">Pelatihan Profesional Sesuai</h5>
            <p class="card-text">Kebutuhan Industri</p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-2">
        <div class="card">
          <div class="card-body text-center">
            <img src="/img/image 58.png" alt="Networking Icon" class="img-fluid">
            <h5 class="card-title mt-3">Kesempatan Networking</h5>
            <p class="card-text">dengan Ahli Industri</p>
          </div>
        </div>
      </div>
    </div>

    <h1 class="page-title justify-content-center mt-6 mb-3 fs-1">
      Program JobCo
    </h1>

    <div class="col-8" style="margin-left: 20rem">
      <img src="/img/image 16.png" alt="Image" class="me-3 mt-5" style="width: 200px; height: 200px;">

      <div class="card-body ms-auto">
        <div class="row">
          <div class="col-12">
            <h5 class="card-title">E-Learning / Kelas</h5>
            <p class="card-text">Ikuti kelas live mendalam yang dipandu oleh para ahli
              industri. Dapatkan keterampilan praktis melalui:</p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-1">
            <input class="form-check-input" style="background-color: #433D8B" type="checkbox" disabled checked>
          </div>
          <div class="col-11">
            <p class="mb-0">Kombinasi studi kasus, diskusi, dan praktik langsung, cocok
              untuk semua level dari pemula hingga tingkat lanjut.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-1 mt-3">
            <input class="form-check-input" style="background-color: #433D8B" type="checkbox" disabled checked>
          </div>
          <div class="col-11 mt-3">
            <p class="mb-0">Sesi mentoring kelompok semi-privat yang dirancang untuk
              membantu Anda membangun portofolio profesional.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-1 mt-3">
            <input class="form-check-input" style="background-color: #433D8B" type="checkbox" disabled checked>
          </div>
          <div class="col-11 mt-3">
            <p class="mb-0">Akses ke tutor berpengalaman dengan jaringan lebih dari
              30.000 alumni.</p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12">
            <a href="#" class="btn btn-sm text-light rounded" style="background-color: #625D9E">Lihat
              Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-10">
      <div class="card-body">
        <div class="row">
          <div class="col-md-7">
            <h2 class="card-title">Discuss Room</h2>
            <p class="card-text">
              Tingkatkan peluang Anda untuk mendapatkan pekerjaan dengan bergabung di
              Ruang Diskusi kami. Program kami mencakup:
            <div class="row mt-4">
              <div class="col-1">
                <input class="form-check-input" style="background-color: #433D8B" type="checkbox" disabled checked>
              </div>
              <div class="col-11">
                <p class="mb-0">Kombinasi studi kasus, diskusi, dan praktik langsung,
                  cocok untuk semua level dari pemula hingga tingkat lanjut.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-1 mt-3">
                <input class="form-check-input" style="background-color: #433D8B" type="checkbox" disabled checked>
              </div>
              <div class="col-11 mt-3">
                <p class="mb-0">Sesi mentoring kelompok semi-privat yang dirancang
                  untuk membantu Anda membangun portofolio profesional.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-1 mt-3">
                <input class="form-check-input" style="background-color: #433D8B" type="checkbox" disabled checked>
              </div>
              <div class="col-11 mt-3">
                <p class="mb-0">Akses ke tutor berpengalaman dengan jaringan lebih
                  dari 30.000 alumni.</p>
              </div>
            </div>
            </p>
            <a href="#" class="btn btn-sm text-light rounded" style="background-color: #625D9E">Lihat
              Selengkapnya</a>
          </div>
          <div class="col-md-5">
            <img src="/img/image 17.png" width="200" height="200" class="img-fluid" alt="Discuss Room Image">
          </div>
        </div>
      </div>
    </div>
    <div class="col-8" style="margin-left: 20rem">
      <img src="/img/image 18.png" alt="Image" class="me-3 mt-5" style="width: 200px; height: 200px;">

      <div class="card-body ms-auto">
        <div class="row">
          <div class="col-12">
            <h5 class="card-title">Mentoring</h5>
            <p class="card-text">Ikuti kelas live mendalam yang dipandu oleh para ahli
              industri. Dapatkan keterampilan praktis melalui:</p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-1">
            <input class="form-check-input" style="background-color: #433D8B" type="checkbox" disabled checked>
          </div>
          <div class="col-11">
            <p class="mb-0">Kombinasi studi kasus, diskusi, dan praktik langsung, cocok
              untuk semua level dari pemula hingga tingkat lanjut.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-1 mt-3">
            <input class="form-check-input" style="background-color: #433D8B" type="checkbox" disabled checked>
          </div>
          <div class="col-11 mt-3">
            <p class="mb-0">Sesi mentoring kelompok semi-privat yang dirancang untuk
              membantu Anda membangun portofolio profesional.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-1 mt-3">
            <input class="form-check-input" style="background-color: #433D8B" type="checkbox" disabled checked>
          </div>
          <div class="col-11 mt-3">
            <p class="mb-0">Akses ke tutor berpengalaman dengan jaringan lebih dari
              30.000 alumni.</p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-12">
            <a href="#" class="btn btn-sm text-light rounded" style="background-color: #625D9E">Lihat
              Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container" style="margin-left: 65px">
      <div class="row mt-6">
        <div class="col-lg-6 ">
          <h2 class="fs-2" style="color: #433D8B">JobCo Telah Berdampak Positif
            Mencetak <br>Talenta Digital Indonesia</h2>
          <p>Platform untuk mempertemukan dan menghubungkan fresh graduate atau orang yang
            belum mendapat pekerjaan. Di dalam platform ini, mereka akan dipertemukan
            dengan berbagai mentor yang ahli di bidangnya. Mentor-mentor ini akan
            membimbing mereka mulai dari wawancara, membuat CV, merangkai LinkedIn, dan
            lain-lain yang berhubungan dengan pekerjaan yang akan dilamar.</p>
          <button class="btn text-light w-25" style="background-color: #625D9E; border-radius: 9px">Daftar</button>
          <button class="btn w-25" style="color: #625D9E; border-color: #625D9E; border-radius: 9px">Masuk</button>
        </div>
        <div class="col-lg-2 ms-6">
          <div class="card">
            <div class="card-body bg-dark text-light rounded">
              <h5 class="card-title">217K</h5>
              <p class="card-text">Digitalent</p>
              <h5 class="card-title">36</h5>
              <p class="card-text">Kelas Online</p>
              <h5 class="card-title">74</h5>
              <p class="card-text">Partner Kolaborasi</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2">
          <img src="/img/austin-distel-jpHw8ndwJ_Q-unsplash 3.png" alt="Image 1">
          <img class="mt-5"
            src="/img/multiracial-group-young-creative-people-smart-casual-wear-discussing-business-brainstorming-meeting-ideas-mobile-application-software-design-project-modern-office 4.png"
            alt="Image 2">
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12">
          <p>Perusahaan yang bekerja sama dengan kami</p>
          <div class="d-flex">
            <a href="https://www.google.com/" target="_blank" class="text-muted me-2"><img
                src="/img/google-logo-search-new-svgrepo-com.svg" width="30" alt="Google"></a>
            <a href="https://www.slack.com/" class="me-3"><img src="/img/Slack-Logo-PNG4.png" width="58"
                alt="Slack"></a>
            <a href="https://www.wikipedia.com/" target="_blank" class="text-muted me-2"><img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/2048px-Microsoft_logo.svg.png"
                width="30" alt="Microsoft"></a>
            <a href="https://www.facebook.com/" target="_blank" class="text-muted me-2"><img
                src="/img/facebook-color-svgrepo-com.svg" width="30" alt="Facebook"></a>
            <a href="https://www.amazon.com/" target="_blank" class="text-muted me-2"><img
                src="/img/amazon-color-svgrepo-com.svg" width="30" alt="Amazon"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('footer')
<footer class="footer py-5">
  <div class="container-xl">
    <div class="footer-info">
      <div class="footer-logo">JobCo</div>
      <div class="footer-contact">
        <div><i class="fas fa-map-marker-alt mr-2"></i>Jl. Simprug Golf 8 No.6, RT.2/RW.8, Grogol
          Sel., Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12220</div>
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
  <div class="container-xl footer-section">
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