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
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
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
          <div class="resume-item">
            <h4>Master of Fine Arts &amp; Graphic Design</h4>
            <h5>2015 - 2016</h5>
            <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
            <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
          </div>
        </div>
        <div class="col-lg-6">
          <h3 class="resume-title">Professional Experience</h3>
          <div class="resume-item">
            <h4>Senior graphic design specialist</h4>
            <h5>2019 - Present</h5>
            <p><em>Experion, New York, NY </em></p>
            <p>
            <ul>
              <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>
              <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>
              <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>
              <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>
            </ul>
            </p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Resume Section -->
@endsection
