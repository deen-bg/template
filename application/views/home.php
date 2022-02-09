<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <link href="<?=base_url('./assets/main/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('./assets/main/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?=base_url('./assets/main/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('./assets/main/vendor/glightbox/css/glightbox.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('./assets/main/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('./assets/main/css/style.css');?>" rel="stylesheet">

  <!-- fontawesome v.5.10.0  -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- =======================================================
  * Template Name: Lumia - v4.5.0
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="#hero">TEMPLATE</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li> -->
          <!-- <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Web Layout</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Testimonials</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="fas fa-caret-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="fas fa-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="linkedin"><i class="fab fa-youtube"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <h1>Welcome to <span>web template</span></h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= Web layout Section ======= -->
    <section id="weblayout" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Web layout</h2>
          <p>เลือกเทมเพลตเว็บไซต์ ทุกเทมเพลตออกแบบมาให้สวยงาม มีจุดเด่น และเอกลักษณ์ของธุรกิจ ไม่ซ้ำใคร</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">Landing page</li>
              <a href="<?=base_url('layout/corporate');?>">Coporate</a>
              <!-- <li data-filter=".filter-app">Simple</li> -->
              <!-- <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('./assets/main/img/portfolio/portfolio-1.jpg');?>" class="img-fluid" alt="">
                <a href="<?=base_url('./assets/main/img/portfolio/portfolio-1.jpg');?>" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://pantoneinterior.com/" target="_blank" class="link-details" title="More Details">
                  <i class="fal fa-link"></i>
                </a>
              </figure>

              <div class="portfolio-info">
                <!-- <h4><a href="portfolio-details.html">Layout 1</a></h4> -->
                <h4><a href="https://pantoneinterior.com/" target="_blank">Layout 1</a></h4>
                <p>WEB</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('./assets/main/img/portfolio/portfolio-2.jpg');?>" class="img-fluid" alt="">
                <a href="<?=base_url('./assets/main/img/portfolio/portfolio-2.jpg');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://pawaninter.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <!-- <h4><a href="portfolio-details.html">Layout 2</a></h4> -->
                <h4><a href="https://pawaninter.com/">Layout 2</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('./assets/main/img/portfolio/portfolio-3.jpg');?>" class="img-fluid" alt="">
                <a href="<?=base_url('./assets/main/img/portfolio/portfolio-3.jpg');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://gdesigncurtain.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://gdesigncurtain.com/">Layout 3</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('./assets/main/img/portfolio/portfolio-4.jpg');?>" class="img-fluid" alt="">
                <a href="<?=base_url('./assets/main/img/portfolio/portfolio-4.jpg');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://saithong99.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://saithong99.com/" target="_blank">Layout 4</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('./assets/main/img/portfolio/portfolio-5.jpg');?>" class="img-fluid" alt="">
                <a href="<?=base_url('./assets/main/img/portfolio/portfolio-6.jpg');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://ppccnc.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://ppccnc.com/" target="_blank">Layout 5</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('./assets/main/img/portfolio/portfolio-6.jpg');?>" class="img-fluid" alt="">
                <a href="<?=base_url('./assets/main/img/portfolio/portfolio-6.jpg');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://refinancejumnumcar.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://refinancejumnumcar.com/" target="_blank">Layout 6</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('./assets/main/img/portfolio/portfolio-7.jpg');?>" class="img-fluid" alt="">
                <a href="<?=base_url('./assets/main/img/portfolio/portfolio-7.jpg');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://tumpakpert.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://tumpakpert.com/" target="_blank">Layout 7</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('./assets/template1/img/portfolio/portfolio-8.jpg');?>" class="img-fluid" alt="">
                <a href="<?=base_url('./assets/template1/img/portfolio/portfolio-8.jpg');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://constructionplus99.com/" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info"> 
                <h4><a href="https://constructionplus99.com/" target="_blank">Layout 8</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('./assets/template1/img/portfolio/portfolio-9.jpg');?>" class="img-fluid" alt="">
                <a href="<?=base_url('./assets/template1/img/portfolio/portfolio-9.jpg');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://202design-studio.com/" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://202design-studio.com/">Layout9</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('./assets/template1/img/portfolio/portfolio-10.jpg');?>" class="img-fluid" alt="">
                <a href="<?=base_url('./assets/template1/img/portfolio/portfolio-10.jpg');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://reeya-s.com/" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://reeya-s.com/">Layout 10</a></h4>
                <p>Web</p>
              </div>
            </div>
          </div>

        </div>
        <!-- Basic -->
        <!-- <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters"> -->
              <!-- <li data-filter="*" class="filter-active">Landing page</li> -->
              <!-- <li data-filter=".filter-app">Basic</li> -->
              <!-- <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li> -->
            <!-- </ul>
          </div>
        </div> -->



      </div>
    </section><!-- End Portfolio Section -->

    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright 2021. All Rights Reserved
        </div>
        <div class="credits">
          </a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" class="linkedin"><i class="fab fa-youtube"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
  <i class="fas fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url('./assets/main/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
  <script src="<?=base_url('./assets/main/vendor/glightbox/js/glightbox.min.js');?>"></script>
  <script src="<?=base_url('./assets/main/vendor/isotope-layout/isotope.pkgd.min.js');?>"></script>
  <script src="<?=base_url('./assets/main/vendor/php-email-form/validate.js');?>"></script>
  <script src="<?=base_url('./assets/main/vendor/purecounter/purecounter.js');?>"></script>
  <script src="<?=base_url('./assets/main/vendor/swiper/swiper-bundle.min.js')?>"></script>
  <script src="<?=base_url('./assets/main/vendor/waypoints/noframework.waypoints.js');?>"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url('./assets/main/js/main.js');?>"></script>

</body>

</html>