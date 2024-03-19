<!-- home.blade.php -->
@extends('layouts.app')

@section('content')
    <!-- Konten Hero Section di sini -->
    <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Better Solutions For Your Business</h1>
          <h2>We are team of talented designers making websites with Bootstrap located at Yogyakarta</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="/about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDLuJLoaA_g" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Video Profile</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="Hero Image">
        </div>
      </div>
    </div>
    </section>
    
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Why Choose Our <strong>IT Services?</strong></h3>
              <p>
                Expertise, Quality Commitment and Innovation for Your Business Excellence
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Skills and Experience <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                    We have a team of experts who are experienced in various IT fields, from software development to network infrastructure. 
                    With a combination of in-depth knowledge and extensive practical experience, we are ready to provide appropriate and effective solutions to meet your technology needs.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Commitment to Quality and Customer Satisfaction <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Quality is our top priority, and we are committed to providing the best service to each of our customers. 
                    From project development to technical support, we put customer satisfaction at the center of everything we do, providing solutions that are reliable, responsive and meet your expectations.
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Innovation and Creativity <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    We not only follow trends in the IT industry, but are also the main drivers behind them. With a focus on innovation and creativity, we are constantly looking for new ways to increase efficiency, productivity and competitive advantage for your business. 
                    By choosing our IT services, you can be sure that you will get access to the newest and most innovative solutions that can produce extraordinary results for your company.
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section>

    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Call To Action</h3>
            <p> Do not miss this opportunity! Join Us Now and Explore a World of Latest News, Tips and Special Offers That Will Inspire and Enhance Your Experience!.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="/contact">Call To Action</a>
          </div>
        </div>

      </div>
    </section>

  <main id="main">

@endsection