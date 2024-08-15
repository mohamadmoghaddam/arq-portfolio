@extends('layouts.app')

@section('content')

    <body class="gallery-single-page">

        @include('layouts.topbar')
        <main class="main">

          <!-- Page Title -->
          <div class="page-title" data-aos="fade">
            <div class="heading">
              <div class="container">
                <div class="row d-flex justify-content-center text-center">
                  <div class="col-lg-8">
                    <h1>Gallery Single</h1>
                    <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
                    <a href="contact.html" class="cta-btn">Available for Hire<br></a>
                  </div>
                </div>
              </div>
            </div>
            <nav class="breadcrumbs">
              <div class="container">
                <ol>
                  <li><a href="index.html">Home</a></li>
                  <li class="current">Gallery Single</li>
                </ol>
              </div>
            </nav>
          </div><!-- End Page Title -->

          <!-- Gallery Details Section -->
          <section id="gallery-details" class="gallery-details section">

            <div class="container" data-aos="fade-up">

                <div class="align-items-center">
                    <img src="{{ asset('/storage/thumbnails/'.$project['thumbnail']) }}" alt="{{$project['thumbnail']}}" class="img-fluid">

                </div>
              <div class="row justify-content-between gy-4 mt-4">

                <div class="col-lg-8" data-aos="fade-up">
                  <div class="portfolio-description">
                    {{$project['description']}}
                  </div>
                </div>

                <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
                  <div class="portfolio-info">
                    <h3>Project information</h3>
                    <ul>
                      <li><strong>Category</strong> {{$project->category->name}}</li>
                      <li><strong>Client</strong> {{$project['client']}}</li>
                      <li><strong>Project date</strong> {{$project['date']}}</li>
                      {{-- <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                      <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li> --}}
                    </ul>
                  </div>
                </div>

              </div>

            </div>

          </section><!-- /Gallery Details Section -->

        </main>


@endsection
