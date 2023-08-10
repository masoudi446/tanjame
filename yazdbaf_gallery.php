<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Gallery</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Gp
    * Updated: Jul 27 2023 with Bootstrap v5.3.1
    * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-inner-pages">
    <?php include "header.php"; ?>
</header><!-- End Header -->

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Gallery</h2>
                <ol>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="yazdbaf_co.php">Yazdbaf Co.</a></li>
                    <li><a href="yazdbaf_gallery.php">Gallery</a></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Section ======= -->
     <section id="portfolio" class="portfolio">
         <div class="container" data-aos="fade-up">

             <div class="row" data-aos="fade-up" data-aos-delay="100">
                 <div class="col-lg-12 d-flex justify-content-center">
                     <ul id="portfolio-flters">
                         <li data-filter="*" class="filter-active">All</li>
                         <li data-filter=".filter-weaving">Weaving</li>
                         <li data-filter=".filter-spinning">Spinning</li>
                     </ul>
                 </div>
             </div>

             <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                 <div class="col-lg-4 col-md-6 portfolio-item filter-spinning">
                     <div class="portfolio-wrap">
                         <img src="assets/img/portfolio/spinning.jpg" class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4>Spinning</h4>
                             <!--<p>App</p>-->
                             <div class="portfolio-links">
                                 <a href="assets/img/portfolio/spinning.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Spinning"><i class="bx bx-plus"></i></a>
                                 <!--<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>-->
                             </div>
                         </div>
                     </div>
                 </div>

                 <div class="col-lg-4 col-md-6 portfolio-item filter-weaving">
                     <div class="portfolio-wrap">
                         <img src="assets/img/portfolio/weaving.jpg" class="img-fluid" alt="">
                         <div class="portfolio-info">
                             <h4>Weaving</h4>
                             <!--<p>Web</p>-->
                             <div class="portfolio-links">
                                 <a href="assets/img/portfolio/weaving.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title="Weaving"><i class="bx bx-plus"></i></a>
                                 <!--<a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>-->
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--
                                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                      <div class="portfolio-wrap">
                                          <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                                          <div class="portfolio-info">
                                              <h4>App 2</h4>
                                              <p>App</p>
                                              <div class="portfolio-links">
                                                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                                     class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                      <div class="portfolio-wrap">
                                          <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                                          <div class="portfolio-info">
                                              <h4>Card 2</h4>
                                              <p>Card</p>
                                              <div class="portfolio-links">
                                                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                                     class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                      <div class="portfolio-wrap">
                                          <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                                          <div class="portfolio-info">
                                              <h4>Web 2</h4>
                                              <p>Web</p>
                                              <div class="portfolio-links">
                                                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                                     class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                      <div class="portfolio-wrap">
                                          <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                                          <div class="portfolio-info">
                                              <h4>App 3</h4>
                                              <p>App</p>
                                              <div class="portfolio-links">
                                                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                                     class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                      <div class="portfolio-wrap">
                                          <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                                          <div class="portfolio-info">
                                              <h4>Card 1</h4>
                                              <p>Card</p>
                                              <div class="portfolio-links">
                                                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                                     class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                      <div class="portfolio-wrap">
                                          <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                                          <div class="portfolio-info">
                                              <h4>Card 3</h4>
                                              <p>Card</p>
                                              <div class="portfolio-links">
                                                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                                     class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                      <div class="portfolio-wrap">
                                          <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                                          <div class="portfolio-info">
                                              <h4>Web 3</h4>
                                              <p>Web</p>
                                              <div class="portfolio-links">
                                                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                                     class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                              </div>
                                          </div>
                                      </div>
                                  </div>-->

             </div>

         </div>
     </section><!-- End Portfolio Section -->


</main><!-- End #main -->

<?php include "footer.php"; ?>

</body>

</html>