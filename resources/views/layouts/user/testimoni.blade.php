<x-index>
<<<<<<< HEAD
  <!-- ======= Testimonial Form ======= -->
=======
<!-- ======= Testimonial Form ======= -->
>>>>>>> a3e262417d964660bea319c3c3519a212a2c76d4
  <section id="testimonial-form" class="testimonial-form">
    <div class="container">

      <div class="row justify-content-center">
        <div class="col-lg-8">

          <div class="section-title">
          </div>

          <!-- Form -->
          <form id="myForm" method="post" action="{{ route('feedback.store') }}" class="php-email-form">
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
<<<<<<< HEAD
                <button type="submit" class="btn btn-primary" onclick="return confirm('Apakah Anda yakin ingin mengirim testimoni ini?')">Kirim</button>
=======
                <button type="submit" class="btn btn-primary" onclick="showModal()">Kirim</button>
>>>>>>> a3e262417d964660bea319c3c3519a212a2c76d4
              </div>
            </div>
          </form>
          <!-- End Form -->

        </div>
      </div>

    </div>
  </section>
</x-index>