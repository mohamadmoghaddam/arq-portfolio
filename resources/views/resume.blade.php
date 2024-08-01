@extends('layouts.app')

@section('index')

<header id="header" class="header-top">
    <div class="container">

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="/">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link active" href="/resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="/portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
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
