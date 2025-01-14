
@extends('layouts.app-index')

@section('index')

<body class="about-page scrolled" date-aos-easing="ease-in-out"
data-aos-duration="600" data-aos-delay="0">
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <h1><a href="index.html">Emily Jones</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->
      <h2>I'm a passionate <span>graphic designer</span> from New York</h2>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="/">Home</a></li>
          <li><a class="nav-link" href="/about">About</a></li>
          <li><a class="nav-link" href="/resume">Resume</a></li>
          <li><a class="nav-link" href="/gallery">Gallery</a></li>
        </ul>
        <i class="bi mobile-nav-toggle bi-list"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->


@endsection



