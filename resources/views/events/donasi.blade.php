<x-index>
<section>
        <!-- Favicons -->
        <link href="{{ asset('/assets/img/favicon.png') }}" rel="icon" />
        <link href="{{ asset('/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

        <!-- Vendor CSS Files -->
        <link href="{{ asset('/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
        <link href="{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
        <link href="{{ asset('/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
        <link href="{{ asset('/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css') }}" rel="stylesheet" />
        

        <!-- Template Main CSS File -->
        <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet" />
        <link href="{{ asset('/assets/css/donasi.css') }}" rel="stylesheet" />
        <main class="py-4">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-11">
                            <div class="card card0 rounded-0">
                                <div class="row">
                                    <div class="col-md-5 d-md-block d-none p-0 box">
                                        <div class="card rounded-0 border-0 card1" id="bill">
                                            <h3 id="heading1"><i></i></h3>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-12 p-0 box">
                                        <div class="card rounded-0 border-0 card2" id="paypage">
                                            <div class="form-card">
                                                <h2 id="heading2" class="text-danger">Metode Pembayaran</h2>
                                                <div class="radio-group">
                                                    <div class="radio" data-value="bca" onclick="showPopup('assets/img/bca.png', 'BCA Bank: Pembayaran donasi dilakukan dengan cara Transfer ke nomor rekening xxx-xxx-xxxx')">
                                                        <img src="assets/img/bca.png" width="150px" height="45px" />
                                                    </div>
                                                    <div class="radio" data-value="bni" onclick="showPopup('assets/img/bni.png', 'BNI Bank: Pembayaran donasi dilakukan dengan cara Transfer ke nomor rekening xxx-xxx-xxxx')">
                                                        <img src="assets/img/bni.png" width="150px" height="45px" />
                                                    </div>
                                                    <div class="radio" data-value="bri" onclick="showPopup('assets/img/bri.png', 'BRI Bank: Pembayaran donasi dilakukan dengan cara Transfer ke nomor rekening xxx-xxx-xxxx')">
                                                        <img src="assets/img/bri.png" width="150px" height="45px" />
                                                    </div>
                                                    <div class="radio" data-value="dana" onclick="showPopup('assets/img/qr.jpg', 'DANA: Pembayaran donasi dilakukan dengan cara Scan kode QR diatas pada aplikasi DANA')">
                                                        <img src="assets/img/dana.png" width="150px" height="45px" />
                                                    </div>
                                                    <div class="radio" data-value="gopay" onclick="showPopup('assets/img/qr.jpg', 'Gopay: Pembayaran donasi dilakukan dengan cara Scan kode QR diatas pada aplikasi Gopay')">
                                                        <img src="assets/img/gopay.png" width="150px" height="45px" />
                                                    </div>
                                                    <div class="radio" data-value="shopeepay" onclick="showPopup('assets/img/qr.jpg', 'Shopeepay: Pembayaran donasi dilakukan dengan cara Scan kode QR diatas pada aplikasi Shopeepay')">
                                                        <img src="assets/img/shopeepay.png" width="150px" height="45px" />
                                                    </div>
                                                    <br />
                                                </div>
                                                <label class="pay">Nominal Donasi</label>
                                                <input type="text" name="holdername" placeholder="100000" />
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="pay">Upload Bukti Pembayaran</label>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <input class="input-file" type="file" name="file_cv" id="file" />
                                                    </div>
                                                </div>
                                                <label class="pay">Pesan untuk Donasi</label>
                                                <input type="text" name="holdername" placeholder="Uang ini tidak banyak tapi semoga bermanfaat" />
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="submit" value="DONASI &nbsp; &#xf178;" class="btn btn-info placeicon" />
                                                    </div>
                                                </div>
                                                <div class="overlay" id="overlay" onclick="hidePopup()"></div>
                                                <div class="popup" id="popup">
                                                    <img id="popupImg" src="" alt="Popup Image" />
                                                    <p id="popupMessage"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
      </main>
    <script src="{{ asset('/assets/js/donasijs.js') }}"></script>
  </section>
</x-index>