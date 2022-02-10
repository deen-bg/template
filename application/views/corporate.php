<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Template - Coporate</title>
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
              <a href="<?=base_url('home/index');?>">Landing page</a>
              <li data-filter="*" class="filter-active">Coporate</li>
              <a href="<?=base_url('layout/ecommerce');?>">Ecommerce</a>
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
                <img src="<?=base_url('assets/image/smilehome.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/smilehome.png');?>" data-gallery="portfolioGallery" class="link-preview portfolio-lightbox" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://smilehome1991.com/home/?lang=th/" target="_blank" class="link-details" title="More Details">
                  <i class="fal fa-link"></i>
                </a>
              </figure>

              <div class="portfolio-info">
                <!-- <h4><a href="portfolio-details.html">Layout 1</a></h4> -->
                <h4><a href="https://smilehome1991.com/home/?lang=th/" target="_blank">Layout 1</a></h4>
                <p>เว็บไซต์ธุรกิจ : ก่อสร้าง</p>
                <p>WEB</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/teddyautosale.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/teddyautosale.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://teddyautosale.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <!-- <h4><a href="portfolio-details.html">Layout 2</a></h4> -->
                <h4><a href="https://teddyautosale.com/">Layout 2</a></h4>
                <p>เว็บไซต์ธุรกิจ : ขายรถยนต์</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/32interior.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/32interior.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://32interiordesign.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://32interiordesign.com/">Layout 3</a></h4>
                <p>เว็บไซต์ธุรกิจ : ออกแบบตกแต่งภายใน</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/generalstest.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/generalstest.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://generalstest.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://generalstest.com/" target="_blank">Layout 4</a></h4>
                <p>เว็บไซต์ธุรกิจ : จำหน่ายเครื่องมือทดสอบทางไฟฟ้า</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/myhome789.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/myhome789.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://myhome789.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://myhome789.com/" target="_blank">Layout 5</a></h4>
                <p>เว็บไซต์ธุรกิจ : จำหน่ายอุปกรณ์ตกแต่งบ้าน</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/mookwatch.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/mookwatch.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://mookwatch.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://mookwatch.com/" target="_blank">Layout 6</a></h4>
                <p>เว็บไซต์ธุรกิจ : ซื้อ-ขายนาฬิกา</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/pantoneinterior.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/pantoneinterior.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://pantoneinterior.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://pantoneinterior.com/" target="_blank">Layout 7</a></h4>
                <p>เว็บไซต์ธุรกิจ : ออกแบบตกแต่งภายใน</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/paullyfurniture.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/paullyfurniture.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://paullyfurniture.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info"> 
                <h4><a href="https://paullyfurniture.com/" target="_blank">Layout 8</a></h4>
                <p>เว็บไซต์ธุรกิจ : จำหน่ายของแต่งในบ้าน</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/ptlighting.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/ptlighting.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://ptlighting.in.th/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://ptlighting.in.th/" target="_blank">Layout9</a></h4>
                <p>เว็บไซต์ธุรกิจ : จำหน่ายโคมไฟ ออกแบบไลท์ติ้ง</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/rushplayofficial.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/rushplayofficial.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://rushplayofficial.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://rushplayofficial.com/" target="_blank">Layout 10</a></h4>
                <p>เว็บไซต์ธุรกิจ : จำหน่ายสเก็ตบอร์ทไฟฟ้า</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/sealinterior.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/sealinterior.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://sealinterior.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://sealinterior.com/" target="_blank">Layout 11</a></h4>
                <p>เว็บไซต์ธุรกิจ : ก่อสร้าง,ออกแบบตกแต่งภายใน</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/sjtpico.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/sjtpico.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://sjtpico.co.th/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://sjtpico.co.th/" target="_blank">Layout 12</a></h4>
                <p>เว็บไซต์ธุรกิจ : สินเชื่อ</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/shirafurniture.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/shirafurniture.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://shirafurniture.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="https://shirafurniture.com/" target="_blank">Layout 13</a></h4>
                <p>เว็บไซต์ธุรกิจ : ปรึกษาเกี่ยวกับเฟอร์นิเจอร์</p>
                <p>Web</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="<?=base_url('assets/image/skhome.png');?>" class="img-fluid" alt="">
                <a href="<?=base_url('assets/image/skhome.png');?>" class="link-preview portfolio-lightbox" data-gallery="portfolioGallery" title="Preview"><i class="far fa-search-plus"></i></a>
                <a href="https://xn--42c2dzalh8hcr.com/" target="_blank" class="link-details" title="More Details"><i class="fal fa-link"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href=https://xn--42c2dzalh8hcr.com/" target="_blank">Layout 14</a></h4>
                <p>เว็บไซต์ธุรกิจ : ก่อสร้าง</p>
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