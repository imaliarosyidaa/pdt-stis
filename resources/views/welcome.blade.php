<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>PDT STIS</title>
    <link href="{{asset ('/assets/img/logo pdt.png') }}" rel="icon">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset ('/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{asset ('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{asset ('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{asset ('/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{asset ('/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{asset ('/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset ('/assets/css/welcome_style.css') }}" rel="stylesheet">
</head>

<body>
    @include('components.home.header')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">SEGERA JADILAH BAGIAN DARI PERUBAHAN</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Mari bersama-sama mendaftar untuk program pengembangan</h2>
                    <h2 data-aos="fade-up" data-aos-delay="400">desa tertinggal dan wujudkan masa depan yang lebih cerah</h2>
                    <h2 data-aos="fade-up" data-aos-delay="400">untuk komunitas kita.</h2>
                    <div data-aos="fade-up" data-aos-delay="600">
                        <div class="text-center text-lg-start">
                            <a href="/daftar-volunteer" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
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

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>Siapa kami?</h3>
                            <h2>Pengembangan Desa Tertinggal (PDT) STITS</h2>
                            <p>
                            Pengembangan Desa Tertinggal (PDT) merupakan kegiatan bakti sosial yang diadakan oleh UKM PMKL 
                           (Pengabdian Masyarakat dan Kepedulian Lingkungan) Politeknik Statistika STIS
                            </p>
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
                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">  

                    </div>
                </div>
            </div>

        </section><!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Testimonials</h2>
                    <p>Apa kata mereka tentang PDT STIS</p>
                </header>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">

                        @foreach($testimoni_feedback as $testi)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    {{ $testi->testimoni }}
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                                    <h3>{{ $testi->user->name }}</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
                        @endforeach

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->


            <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">

            <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Blog</h2>
                <p>Recent posts form our Blog</p>
            </header>

            <div class="row">

                @foreach($recentPost as $beritaTerbaru)
                <div class="col-lg-4">
                <div class="post-box">
                    <div class="post-img">
                        @if($beritaTerbaru->image)
                            <img src="{{ asset('storage/' . $beritaTerbaru->image) }}" alt="" class="img-fluid">
                        @else
                            <img src="https://source.unsplash.com/1000x600?{{ $beritaTerbaru->category->name }}" alt="" class="img-fluid">
                        @endif
                    </div>
                    <span class="post-date"><time datetime="2020-01-01">{{ $beritaTerbaru->created_at->diffForHumans() }}</time></span>
                    <h3 class="post-title">{{ $beritaTerbaru->title }}</h3>
                    <p>{{ $beritaTerbaru->excerpt }}</p>
                    <a href="/berita/{{ $beritaTerbaru->slug }}"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
                </div>
            @endforeach

            </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container" data-aos="fade-up">

                <header class="contact-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">
                    <div class="col-lg-6">
                        <form action="{{route('send.email')}}" method="POST" class="php-email-form">
            @csrf  
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                  @error('name')
                    <span class="text-danger">{{ $message }} </span>
                  @enderror
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                  @error('email')
                    <span class="text-danger">{{ $message }} </span>
                  @enderror
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                  @error('subject')
                    <span class="text-danger">{{ $message }} </span>
                  @enderror
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="content" rows="6" placeholder="Message" required></textarea>
                  @error('content')
                    <span class="text-danger">{{ $message }} </span>
                  @enderror
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

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">

            <div class="container" data-aos="fade-up">

                <header class="section-header">
                    <h2>Mitra Kami</h2>
                    <p>Kemitraan</p>
                </header>

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/mitra-1.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/mitra-2.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/mitra-3.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/mitra-4.png" class="img-fluid" alt=""></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </section><!-- End Clients Section -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('components.home.footer')
    <!-- ======= End Footer ======= -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset ('/assets/mahasiswa/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{asset ('/assets/mahasiswa/vendor/aos/aos.js') }}"></script>
    <script src="{{asset ('/assets/mahasiswa/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{asset ('/assets/mahasiswa/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{asset ('/assets/mahasiswa/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{asset ('/assets/mahasiswa/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{asset ('/assets/mahasiswa/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset ('/assets/mahasiswa/js/main.js') }}"></script>

</body>

</html>