<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PDT STIS</title>
    <link href="assets/img/logo pdt.png" rel="icon">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/welcome_style.css" rel="stylesheet">
</head>

<body>
    @include('components.home.header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Segera Jadilah Bagian dari Perubahan</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Mari bersama-sama mendaftar untuk program pengembangan desa tertinggal dan wujudkan 
                    </h2>
                    <h2 data-aos="fade-up" data-aos-delay="400">masa depan yang lebih cerah untuk komunitas kita.</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="#"
                                class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                                <span>Daftarkan Dirimu Sekarang!</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">

        <div class="container" data-aos="fade-up">

            <div class="row gy-4" data-aos="fade-left">

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box">
                        <h3 style="color: #07d5c0;">175</h3>
                        <div class="price">Volunteer</div>
                        <img src="assets/img/about-1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box">
                        <h3 style="color: #65c600;">60</h3>
                        <div class="price">Kemitraan</div>
                        <img src="assets/img/about-2.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box">
                        <h3 style="color: #ff901c;">+20 JUTA</h3>
                        <div class="price">Donasi</div>
                        <img src="assets/img/about-3.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="box">
                        <h3 style="color: #ff0071;">58</h3>
                        <div class="price">Desa</div>
                        <img src="assets/img/about-4.png" class="img-fluid" alt="">
                    </div>
                </div>

            </div>

        </div>

    </section><!-- End Pricing Section -->


    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="content">
                            <h3>Siapa kami?</h3>
                            <h2>Expedita voluptas omnis cupiditate totam eveniet nobis sint iste. Dolores est repellat
                                corrupti reprehenderit.</h2>
                            <p>
                                Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor
                                consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam
                                et est corrupti.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="#"
                                    class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="assets/img/about.png" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Galeri</h2>
                    <p>Galeri Kegiatan PDT</p>
                </header>

                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">2021</li>
                            <li data-filter=".filter-card">2022</li>
                            <li data-filter=".filter-web">2023</li>
                        </ul>
                    </div>
                </div>

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/galeri/galeri-1.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Deskripsi</h4>
                                <p>Deskripsi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/galeri/galeri-1.png" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Deskripsi"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/galeri/galeri-2.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Deskripsi</h4>
                                <p>Deskripsi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/galeri/galeri-2.png" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Deskripsi"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/galeri/galeri-3.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Deskripsi</h4>
                                <p>Deskripsi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/galeri/galeri-3.png" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Deskripsi"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/galeri/galeri-4.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Deskripsi</h4>
                                <p>Deskripsi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/galeri/galeri-4.png" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Deskripsi"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/galeri/galeri-5.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Deskripsi</h4>
                                <p>Deskripsi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/galeri/galeri-5.png" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Deskripsi"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/galeri/galeri-6.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Deskripsi</h4>
                                <p>Deskripsi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/galeri/galeri-6.png" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Deskripsi"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/galeri/galeri-7.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Deskripsi</h4>
                                <p>Deskripsi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/galeri/galeri-7.png" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Deskripsi"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/galeri/galeri-8.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Deskripsi</h4>
                                <p>Deskripsi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/galeri/galeri-8.png" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Deskripsi"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/galeri/galeri-9.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Deskripsi</h4>
                                <p>Deskripsi</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/galeri/galeri-9.png" data-gallery="portfolioGallery"
                                        class="portfokio-lightbox" title="Deskripsi"><i class="bi bi-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i
                                            class="bi bi-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

                @include('layouts.testimoniFeedback')

        </section><!-- End Testimonials Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Blog</h2>
                    <p>Recent posts form our Blog</p>
                </header>

                <div class="row">

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid"
                                    alt=""></div>
                            <span class="post-date">Tue, September 15</span>
                            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur
                                sit</h3>
                            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read
                                    More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid"
                                    alt=""></div>
                            <span class="post-date">Fri, August 28</span>
                            <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
                            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read
                                    More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid"
                                    alt=""></div>
                            <span class="post-date">Mon, July 11</span>
                            <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
                            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read
                                    More</span><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Mitra Kami</h2>
                <p>Kemitraan</p>
            </header>

            <div class="clients-slider swiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/mitra-1.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/mitra-2.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/mitra-3.png" class="img-fluid"
                            alt=""></div>
                    <div class="swiper-slide"><img src="assets/img/mitra-4.png" class="img-fluid"
                            alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

        </section><!-- End Clients Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="contact-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>

                    </div>

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street,<br>New York, NY 535022</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->

        @include('components.home.footer')
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
