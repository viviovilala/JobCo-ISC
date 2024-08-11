<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dashboard - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
  <!-- CSS files -->
  <link href="./dist/css/tabler.min.css?1692870487" rel="stylesheet" />
  <link href="./dist/css/tabler-flags.min.css?1692870487" rel="stylesheet" />
  <link href="./dist/css/tabler-payments.min.css?1692870487" rel="stylesheet" />
  <link href="./dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet" />
  <link href="./dist/css/demo.min.css?1692870487" rel="stylesheet" />
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
      font-feature-settings: "cv03", "cv04", "cv11";
    }

    /* Efek Bergeser pada Garis Header */
    .navbar-nav .nav-item .nav-link {
      position: relative;
      transition: color 0.3s ease, border-bottom 0.3s ease;
    }

    .navbar-nav .nav-item .nav-link::before {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 2px;
      background-color: #625D9E;
      transition: width 0.3s ease;
    }

    .navbar-nav .nav-item .nav-link.active,
    .navbar-nav .nav-item .nav-link:hover {
      color: #625D9E;
    }

    .navbar-nav .nav-item .nav-link.active::before,
    .navbar-nav .nav-item .nav-link:hover::before {
      width: 100%;
    }

    .btn-signup {
      background-color: #ffffff;
      border-color: #625D9E;
      border-width: 1.5px;
      border-radius: 9px;
    }

    .btn-signin {
      background-color: #625D9E;
      border-radius: 9px;
    }

    .section-meet-our-mentor {
      margin-bottom: 60px;
      /* Tambahkan margin bawah untuk pemisah */
    }

    .mentor-card {
      display: flex;
      flex-direction: column;
      /* Atur frame mentor ke arah vertikal */
      width: 200px;
      /* Perkecil lebar frame mentor */
      margin: 10px;
      /* Atur jarak antar frame mentor */
      border: 1px solid #ddd;
      border-radius: 16px;
      /* Sudut tumpul */
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      /* Opsional: Berikan efek bayangan */
      position: relative;
      /* Untuk positioning absolute anak */
      overflow: hidden;
      /* Sembunyikan bagian yang keluar dari frame */
    }

    .mentor-card .card-img-top {
      width: 100%;
      height: 150px;
      /* Perkecil tinggi avatar */
      object-fit: cover;
      border-top-left-radius: 16px;
      /* Sudut tumpul atas */
      border-top-right-radius: 16px;
      /* Sudut tumpul atas */
      transition: transform 0.3s ease;
      /* Efek transisi */
    }

    .mentor-card:hover .card-img-top {
      transform: translateX(-10px);
      /* Geser gambar ke kiri */
    }

    .mentor-card .card-body {
      padding: 10px;
      text-align: center;
      /* Opsional: Tengahkan tulisan */
    }

    .mentor-card .card-title {
      font-size: 1.1rem;
      margin-bottom: 5px;
    }

    .mentor-card .card-text {
      font-size: 0.8rem;
      color: #666;
    }

    .testimoni-card {
      display: flex;
      flex-direction: row;
      /* Atur frame testimonial ke arah horizontal */
      width: 250px;
      /* Lebar frame testimonial */
      margin: 10px auto;
      /* Margin antar frame testimonial */
      border: 1px solid #ddd;
      border-radius: 16px;
      /* Sudut tumpul */
      box-shadow: 0 4px 10.3px 3px rgba(0, 0, 0, 0.13);
      /* Opsional: Berikan efek bayangan */
      position: relative;
      /* Untuk positioning absolute anak */
      align-items: center;
    }

    .testimoni-card .testimonial-quote {
      padding: 10px;
      text-align: left;
      /* Opsional: Kirikan tulisan */
      flex: 1;
    }

    .testimoni-card .testimonial-author {
      text-align: left;
      /* Opsional: Kirikan tulisan */
      padding: 10px;
      flex: 1;
    }

    .testimoni-card .testimonial-author h3 {
      margin-bottom: 5px;
      font-size: 1rem;
    }

    .testimoni-card .testimonial-author p {
      font-size: 0.8rem;
      color: #666;
    }

    .testimoni-card .testimonial-image {
      position: relative;
      width: 60px;
      height: 60px;
      border-radius: 16px;
      margin-left: 10px;
    }

    .testimoni-card .testimonial-image img {
      position: absolute;
      top: 5px;
      left: 5px;
      background: url(image.png);
      opacity: 0.5;
      border-radius: 16px;
      width: 50px;
      height: 50px;
    }

    .testimoni-card .testimonial-customer {
      font-family: 'Public Sans';
      font-style: normal;
      font-weight: 400;
      font-size: 12px;
      line-height: 19px;
      color: #616161;
      opacity: 0.77;
    }

    #carouselExample {
      position: relative;
      /* Untuk mengatur posisi absolute children */
    }

    .carousel-item {
      position: relative;
      /* Untuk mengatur posisi absolute children */
    }

    .mentor-card-container {
      position: absolute;
      display: flex;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      transform: translateX(0);
      transition: transform 5s linear;
      /* Durasi swipe 5 detik */
    }

    .mentor-card-container.active {
      transform: translateX(-100%);
      /* Geser semua frame ke kiri */
    }
  </style>
</head>

<body>
  <script src="./dist/js/demo-theme.min.js?1692870487"></script>
  <div class="page">
    <!-- Navbar -->
    <header class="navbar navbar-expand-md d-print-none">
      <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
          aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
          <a href=".">
            <img src="/img/jobco.png" width="110" height="32" alt="JobCo" class="navbar-brand-image">
          </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
          <div class="nav-item d-none d-md-flex me-3">
            <div class="btn-list">
            </div>
          </div>
          <div class="d-none d-md-flex">
            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
              data-bs-toggle="tooltip" data-bs-placement="bottom">
              <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
              </svg>
            </a>
            <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
              data-bs-toggle="tooltip" data-bs-placement="bottom">
              <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
              </svg>
            </a>

          </div>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown">
              <span class="d-none d-sm-inline">
                <a href="/sign-up" class="btn btn-signup text-dark">
                  Sign Up
                </a>
              </span>
            </div>
            <div class="nav-item dropdown px-2">
              <a href="/sign-in" class="btn btn-signin d-none d-sm-inline-block text-light">
                Sign In
              </a>
            </div>
          </div>
        </div>
    </header>
    <header class="navbar-expand-md">
      <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
          <div class="container-xl">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="./">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Home
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('elearning') ? 'active' : '' }}" href="/elearning">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                      <path d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    E-Learning
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('discuss') ? 'active' : '' }}" href="./discuss">
                  <span class="nav-link-icon d-md-none d-lg-inline-block">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-message">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M8 9h8" />
                      <path d="M8 13h6" />
                      <path
                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Discuss
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('mentoring') ? 'active' : '' }}" href="./mentoring">
                  <span
                    class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                      <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                    </svg>
                  </span>
                  <span class="nav-link-title">
                    Mentoring
                  </span>
                </a>
              </li>
            </ul>
            <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
              <form action="./" method="get" autocomplete="off" novalidate>
                <div class="input-icon">
                  <span class="input-icon-addon">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                      stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                      <path d="M21 21l-6 -6" />
                    </svg>
                  </span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>

    @yield('content')

    <section class="section-testimoni">
      <h1 class="page-title justify-content-center mt-6 mb-3 fs-1">
        Testimoni Member JobCo
      </h1>
      <div class="row justify-content-center">
        <div class="col-md-3">
          <div class="testimoni-card">
            <div class="testimonial-quote">
              <p>Seneng banget bisa belajar di JobCo! Pembelajarannya asik, materinya pun daging semua. Ga nyesel bisa
                belajar dan kenal mentor-mentor keren dari JobCo!</p>
            </div>
            <div class="testimonial-author">
              <h3>Christoper Nolance</h3>
              <p>Customer</p>
            </div>
            <div class="testimonial-image">
              <img src="/static/avatars/000f.jpg" height="45" width="45" alt="Christoper Nolance">
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="testimoni-card">
            <div class="testimonial-quote">
              <p>Seneng banget bisa belajar di JobCo! Pembelajarannya asik, materinya pun daging semua. Ga nyesel bisa
                belajar dan kenal mentor-mentor keren dari JobCo!</p>
            </div>
            <div class="testimonial-author">
              <h3>Christoper Nolance</h3>
              <p>Customer</p>
            </div>
            <div class="testimonial-image">
              <img src="/static/avatars/000m.jpg" height="45" width="45" alt="Christoper Nolance">
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="testimoni-card">
            <div class="testimonial-quote">
              <p>Seneng banget bisa belajar di JobCo! Pembelajarannya asik, materinya pun daging semua. Ga nyesel bisa
                belajar dan kenal mentor-mentor keren dari JobCo!</p>
            </div>
            <div class="testimonial-author">
              <h3>Christoper Nolance</h3>
              <p>Customer</p>
            </div>
            <div class="testimonial-image">
              <img src="/static/avatars/001f.jpg" height="45" width="45" alt="Christoper Nolance">
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="testimoni-card">
            <div class="testimonial-quote">
              <p>Seneng banget bisa belajar di JobCo! Pembelajarannya asik, materinya pun daging semua. Ga nyesel bisa
                belajar dan kenal mentor-mentor keren dari JobCo!</p>
            </div>
            <div class="testimonial-author">
              <h3>Christoper Nolance</h3>
              <p>Customer</p>
            </div>
            <div class="testimonial-image">
              <img src="/static/avatars/001m.jpg" height="45" width="45" alt="Christoper Nolance">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section-meet-our-mentor">
      <h1 class="page-title justify-content-center mt-6 mb-3 fs-1">
        Meet Our Mentor
      </h1>
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="mentor-card-container active">
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 1" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 1</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 2" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 2</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 3" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 3</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 4" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 4</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="mentor-card-container">
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 5" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 5</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 6" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 6</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 7" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 7</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 8" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 8</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="mentor-card-container">
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 9" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 9</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 10" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 10</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 11" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 11</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="mentor-card">
                <img src="https://example.com/image.jpg" alt="Mentor 12" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Mentor 12</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
        <!-- Indicators -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
      </div>
    </section>

    <footer class="footer footer-transparent d-print-none mt-6">
      <div class="container-fluid">
        <div class="row ">
          <div class="col-md-4" style="margin-left: 120px">
            <h5 class="mb-3 fs-2 text-dark fw-bolder">JobCo</h5>
            <ul class="list-unstyled">
              <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"
                  class="icon icon-tabler icons-tabler-filled icon-tabler-map-pin">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" />
                </svg><a href="#" class="text-muted"><i class="fas fa-map-marker-alt"></i>
                  JobCo</a>
              </li>
              <li class="mt-2"><a href="#" class="text-muted ms-4">Jl. Simprug Golf 8 No.6,
                  RT.2/RW.8,
                  Grogol Sel.,</a></li>
              <li><a href="#" class="text-muted ms-4">Kec. Kby. Lama, Kota Jakarta Selatan,
                  Daerah</a></li>
              <li><a href="#" class="text-muted ms-4">Khusus Ibukota Jakarta 12220</a></li>
              <li><a href="https://www.google.com/maps" target="_blank" class="text-muted me-2"><i
                    class="fas fa-globe"></i> Lihat di
                  Google
                  Maps</a></li>
              <li class="mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                  fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-mail">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" />
                  <path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.5
                    d=" M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201
                    -.007h14z" />
                </svg><a href="https://www.google.com/mail" target="_blank" class="text-muted me-2"><i
                    class="fas fa-envelope"></i>
                  info@jobco.com</a></li>
              <li class="mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                  fill="currentColor" class="icon icon-tabler icons-tabler-filled icon-tabler-phone">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path
                    d="M9 3a1 1 0 0 1 .877 .519l.051 .11l2 5a1 1 0 0 1 -.313 1.16l-.1 .068l-1.674 1.004l.063 .103a10 10 0 0 0 3.132 3.132l.102 .062l1.005 -1.672a1 1 0 0 1 1.113 -.453l.115 .039l5 2a1 1 0 0 1 .622 .807l.007 .121v4c0 1.657 -1.343 3 -3.06 2.998c-8.579 -.521 -15.418 -7.36 -15.94 -15.998a3 3 0 0 1 2.824 -2.995l.176 -.005h4z" />
                </svg><a href="#" class="text-muted"><i class="fas fa-phone"></i> +62123
                  4567
                  8910</a></li>
            </ul>
          </div>
          <div class="col-md-1" style="margin-left: 185px">
            <h5 class="mb-3 text-dark">JOBCO</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-muted">Tentang</a></li>
              <li><a href="#" class="text-muted">Karir</a></li>
              <li><a href="#" class="text-muted">Kerjasama</a></li>
            </ul>
            <!-- Social Media Links -->
            <div class="d-flex justify-content-start">
              <a href="https://www.tiktok.com/" target="_blank" class="text-muted me-2">
                <img src="images/tiktok.png" alt="Tiktok" alt="TikTok" width="45">
              </a>
              <a href="https://www.instagram.com/" target="_blank" class="text-muted me-2">
                <img src="images/instagram.png" alt="Instagram" alt="Instagram" width="45">
              </a>
            </div>
          </div>
          <div class="col-md-1">
            <h5 class="mb-3 text-dark">PRODUK</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-muted">E-learning</a></li>
              <li><a href="#" class="text-muted">Bootcamp</a></li>
              <li><a href="#" class="text-muted">Review CV</a></li>
            </ul>
            <div class="d-flex justify-content-start"></div>
            <a href="https://www.linkedin.com/" target="_blank" class="text-muted me-2">
              <img src="images/linkedin.png" alt="LinkedIn" alt="LinkedIn" width="35">
            </a>
            <a href="https://twitter.com/" target="_blank" class="text-muted me-2">
              <img src="images/twitter.png" alt="Twitter" alt="Twitter" width="35">
            </a>
          </div>
          <div class="col-md-2">
            <h5 class="mb-3 text-dark">BANTUAN DAN PANDUAN</h5>
            <ul class="list-unstyled">
              <li><a href="#" class="text-muted">FAQ</a></li>
              <li><a href="#" class="text-muted">Syarat dan Ketentuan</a></li>
              <li><a href="#" class="text-muted">Ketentuan Privasi</a></li>
            </ul>
            <div class="d-flex justify-content-start"></div>
            <a href="https://www.youtube.com/" target="_blank" class="text-muted">
              <img src="images/youtube.png" alt="Youtube" alt="YouTube" width="40">
            </a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>

</html>