<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />

        <title>PDT STIS</title>
        <meta content="" name="description" />
        <meta content="" name="keywords" />

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon" />
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet" />
    </head>

    <body>
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top">
            <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <img src="assets/img/logo pdt.png" alt="" />
                    <span class="logo-text">
                        <span>Pembangunan</span>
                        <span>Desa Tertinggal</span>
                    </span>
                </a>

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto active" href="HalamanUtama.html">Home</a></li>
                        <li class="dropdown">
                            <a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#about">Tentang Kami</a></li>
                                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                                <li><a href="#testimonials">Feedback</a></li>
                                <li><a href="#clients">Kemitraan</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#"><span>Mari Bergabung</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="Volunteer.html">Volunteer</a></li>
                                <li><a href="Donasi.html">Donasi</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Publikasi</a></li>
                        <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
                        <li><a class="signup" href="#">Sign Up</a></li>
                        <li><a class="getstarted scrollto" href="#about">Log In</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
            </div>
        </header>
        <!-- End Header -->
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <header class="section-header">
                    <!-- <h2>Galeri</h2> -->
                    <p>Galeri Kegiatan PDT</p>
                </header>

                <!-- <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active"><option value="">All</option></li>
                  <li data-filter=".filter-app"><option value="">2021</option></li>
                  <li data-filter=".filter-card"><option value="">2022</option></li>
                  <li data-filter=".filter-web"><option value="">2023</option></li>
            </ul>
            </div>
          </div> -->
                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div>
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter
                            </button>
                            <div style="margin-top: 20px;"></div>

                            <ul class="dropdown-menu" id="portfolio-flters">
                                <li class="dropdown-item" data-filter="*" class="filter-active">
                                    <option value="">All</option>
                                </li>
                                <li class="dropdown-item" data-filter=".filter-2021">
                                    <option value="">2021</option>
                                </li>
                                <li class="dropdown-item" data-filter=".filter-2022">
                                    <option value="">2022</option>
                                </li>
                                <li class="dropdown-item" data-filter=".filter-2023">
                                    <option value="">2023</option>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($galleries as $gallery)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $gallery->tahun }}">
                        <div class="portfolio-wrap">
                            <img style="width: 100%; height:100%;" src="{{ asset('/storage/public/posts/'.$gallery->filename) }}">
                            <div class="portfolio-info">
                                <h4>{{ $gallery->title }}</h4>
                                <p>{{ $gallery->description }}</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('/storage/public/posts/'.$gallery->filename) }}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="{{ $gallery->title }}"><i class="bi bi-plus"></i></a>
                                    <!-- <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a> -->
                                </div>
                            </div> 
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Portfolio Section -->

        <!-- Vendor JS Files -->
        <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="assets/vendor/aos/aos.js"></script>
        <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="assets/vendor/php-email-form/validate.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="assets/vendor/filter-gallery/filter-year.js"></script>

        <!-- Isotope JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

        <!-- Template Main JS File -->
        <script src="assets/js/main.js"></script>
    </body>
</html>
