@extends('layouts.app')

@section('index')

<header id="header" class="header-top">
    <div class="container">

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="/">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="/resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link active" href="/portfolio">Portfolio</a></li>
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
    <style>
        /* Modify the background color */

        .nav-link{

            color: rgb(255, 255, 255);


        }
        /* .nav-link.active{
            color: rgb(255, 255, 255);
            background-color: #18d26e;
            border-radius: 8px

        } */
        .nav-link:hover{
            color: rgb(255, 255, 255)
        background-color: #18d26e;

        }

    </style>
  </header><!-- End Header -->




 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio section-show">

    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>My Works</p>
      </div>
      <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">

            <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="/portfolio/">All</a></li>
            @foreach($categories as $category)
                <li class="nav-item"><a class="nav-link" href="/portfolio/category/{{$category['id']}}">{{$category['name']}}</a></li>
            @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        @foreach($projects as $project)
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="/portfolio/{{$project['id']}}">
            <div class="portfolio-wrap">
                <img src="{{ asset('/storage/thumbnails/'.$project['thumbnail']) }}" class="img-fluid" alt="{{ $project['title']}}">
                <div class="portfolio-info">
                    <h4>{{$project['title']}}</h4>
                </div>
            </div>
            </a>
        </div>
        @endforeach
      </div>

  </section><!-- End Portfolio Section -->
@endsection
