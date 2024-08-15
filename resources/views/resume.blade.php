@extends('layouts.app')

@section('index')


<header id="globalheader" class="globalheader d-flex align-items-center sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html">Home<br></a></li>
          <li><a href="about.html">About</a></li>
          <li class="dropdown"><a href="gallery.html" class="active"><span>Gallery</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="gallery.html" class="active">Nature</a></li>
              <li><a href="gallery.html" class="active">People</a></li>
              <li><a href="gallery.html" class="active">Architecture</a></li>
              <li><a href="gallery.html" class="active">Animals</a></li>
              <li><a href="gallery.html" class="active">Sports</a></li>
              <li><a href="gallery.html" class="active">Travel</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="services.html">Services</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header>





<!-- ======= Resume Section ======= -->
 <section id="resume" class="resume section-show">
    <div class="container">

      <div class="section-title">
        <h2>Resume</h2>
        <p>Check My Resume</p>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <h3 class="resume-title">Sumary</h3>
          <div class="resume-item pb-0">
            <h4>Alice Barkley</h4>
            <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>
            <p>
            <ul>
              <li>Portland par 127,Orlando, FL</li>
              <li>(123) 456-7891</li>
              <li>alice.barkley@example.com</li>
            </ul>
            </p>
          </div>

          <h3 class="resume-title">Education</h3>
          @foreach ($cvs as $cv)
            @if($cv['type'] == 'education')
            <div class="resume-item">
                <h4>{{$cv['position']}}</h4>
                <h5>{{$cv['startdate']}} - {{$cv['enddate']}}</h5>
                <p><em>{{$cv['company']}}</em></p>
                <p>{{$cv['description']}}</p>
            </div>
            @endif
          @endforeach

        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          @foreach ($cvs as $cv)
            @if($cv['type'] == 'experience')
            <div class="resume-item">
                <h4>{{$cv['position']}}</h4>
                <h5>{{$cv['startdate']}} - {{$cv['enddate']}}</h5>
                <p><em>{{$cv['company']}}</em></p>
                <p>{{$cv['description']}}</p>
            </div>
            @endif
          @endforeach
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->
@endsection
