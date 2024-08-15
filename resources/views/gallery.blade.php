@extends('layouts.app')

@section('content')

<body class="gallery-page">

    @include('layouts.topbar')
  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Gallery</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
              <a href="contact.html" class="cta-btn">Available for Hire<br></a>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            @if(isset($category))
            <li><a href="/">Home</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li class="active">{{$category['name']}}</li>
            @else
            <li><a href="/">Home</a></li>
            <li class="current">Gallery</li>
            @endif
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
            @foreach($projects as $project)
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="gallery-item h-100">
              <img src="{{ asset('/storage/thumbnails/'.$project['thumbnail']) }}" class="img-fluid" alt="{{$project['title']}}">
              <div class="gallery-links d-flex align-items-center justify-content-center">
                <a href="{{ asset('/storage/thumbnails/'.$project['thumbnail']) }}" title="{{$project['title']}}" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                <a href="/gallery/{{$project['id']}}" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- End Gallery Item -->
            @endforeach
        </div>

      </div>

    </section><!-- /Gallery Section -->

  </main>

@endsection
