@extends('layouts.app')

@section('index')


  <main id="main">
    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">

        <div class="container">

            <div class="row">

                <div class="col-lg-8">

            <h2 class="portfolio-title">{{$project['title']}}</h2>

            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="/{{$project['footage']}}" alt="">
                </div>
{{--
                <div class="swiper-slide">
                    <img src="/{{$project['footage']}}" alt="">
                  </div>

                  <div class="swiper-slide">
                    <img src="/{{$project['footage']}}" alt="">
                  </div> --}}

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

          <div class="col-lg-4 portfolio-info">

            <h3>Project information                             <a href="/portfolio"><i class="bi bi-arrow-bar-right"></i></a></h3>
            <ul>
              <li><strong>Category</strong>: {{$project->category->name}}</li>
              <li><strong>Client</strong>: {{$project['company']}}</li>
              <li><strong>Project date</strong>: {{$project['date']}}</li>
            </ul>

            <p>
                {{$project['description']}}
            </p>
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->



</main><!-- End #main -->

@endsection
