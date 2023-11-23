<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PDT STIS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset ('/assets/mahasiswa/img/favicon.png') }}" rel="icon">
  <link href="{{asset ('/assets/mahasiswa/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset ('/assets/mahasiswa/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{asset ('/assets/mahasiswa/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset ('/assets/mahasiswa/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{asset ('/assets/mahasiswa/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{asset ('/assets/mahasiswa/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{asset ('/assets/mahasiswa/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset ('/assets/mahasiswa/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{asset ('assets/mahasiswa/img/logo pdt.png') }}" alt="">
        <span class="logo-text">
          <span>Pembangunan</span>
          <span>Desa Tertinggal</span>
        </span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Tentang Kami</a></li>
              <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
              <li><a href="#">Feedback</a></li>
              <li><a href="#">Kemitraan</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Mari Bergabung</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Volunteer</a></li>
              <li><a href="#">Donasi</a></li>
            </ul>
          </li>
          <li><a href="blog.html">Publikasi</a></li>
          <li><a href="testimoni.html">Testimoni</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galeri</a></li>
          <li><a class="signup" href="#">Sign Up</a></li>
          <li><a class="getstarted scrollto" href="#about">Log In</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Testimonial Form ======= -->
  <section id="testimonial-form" class="testimonial-form">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-lg-8">

          <div class="section-title">
          </div>

          <!-- Form -->
          <form method="post" action="{{ route('feedback.store') }}" class="php-email-form">
            @csrf
            @method('post')
            <input type="hidden" role="form" name="id_user" value="1">
            <div class="row">
              <!-- Pertanyaan 1 -->
              <div class="col-md-12 form-group">
                <label for="testimoni">Berikan testimoni Anda untuk kegiatan PDT:</label>
                <textarea class="form-control" name="testimoni" rows="6"></textarea>
              </div>

              <!-- Pertanyaan 2 -->
              <div class="col-md-12 form-group mt-3">
                <label for="kritik-saran">Berikan saran dan kritik Anda untuk kegiatan PDT:</label>
                <textarea class="form-control" name="feedback" rows="6"></textarea>
              </div>

              <!-- Tombol Submit -->
              <div class="col-md-12 mt-3 text-center">
                <button type="submit" class="btn btn-primary">Kirim</button>
              </div>
            </div>
          </form>
          <!-- End Form -->

        </div>
      </div>

    </div>
  </section>




  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="assets/img/logo.png" alt="">
              <span>FlexStart</span>
            </a>
            <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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