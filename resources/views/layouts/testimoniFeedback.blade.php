<div class="container" data-aos="fade-up">
  <header class="section-header">
      <h2>Testimonials</h2>
      <p>What they are saying about us</p>
  </header>

  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
  <div class="swiper-wrapper">
  

    @foreach ($feedback as $item)
    <div class="swiper-slide">
        <div class="testimonial-item">
            <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>{{$item->feedback}}</p>
            <div class="profile mt-auto">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3></h3>
            <h4>{{$item->users->username}}</h4>
            </div>
        </div>
      </div>
    @endforeach
  <!-- End testimonial item -->

</div>
<div class="swiper-pagination"></div>
</div>
</div>