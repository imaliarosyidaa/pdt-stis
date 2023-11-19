@extends('layouts/navbar')

@section('blog')
    <!-- ======= Breadcrumbs ======= -->
    @section('breadcrumbs')
      <li><a href="index.html">Home</a></li>
      <li>{{ $title }}</li>
    @endsection

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">
    <div class="row">
      
      {{-- Menampilkan berita ketika jumlah berita > 0 --}}
      @if(count($berita) > 0)

      <div class="col-lg-8 entries">
        <!-- Iterasi isi database semua berita -->
        
        @foreach ($berita as $isi)

          <article class="entry">

            {{-- Menampilkan gambar/ thumbnail --}}
            <div class="entry-img">
              <img src="https://source.unsplash.com/1000x600?{{ $isi->category->name }}" alt="" class="img-fluid">
            </div>

            {{-- Menampilkan judul yang dapat diklik dan mengarah ke halaman berita berdasarkan judul --}}
            <h2 class="entry-title">
              <a href="/berita/{{ $isi->slug }}">{{ $isi->title}}</a>
            </h2>

            {{-- Menampilkan author dan waktu publish berita --}}
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $isi->author }}</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $isi->created_at->diffForHumans() }}</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $isi->category->name }}</time></a></li>
              </ul>
            </div>

            {{-- Menampilkan excerpt dan button read more yang mengarah ke halaman single post  --}}
            <div class="entry-content">
              <p>
                {{ $isi->excerpt }}
              </p>
              <div class="read-more">
                <a href="/berita/{{ $isi->slug }}">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->
        
        @endforeach

      </div><!-- End blog entries list -->
      
      <div class="col-lg-4">
        @include('layouts.sidebar')
      </div><!-- End blog sidebar -->
      
      @else

        {{-- Menampilkan teks ketika tidak terdapat berita yang akan ditampilkan --}}
        <div class="col-lg-8 entries">
          <p class="text-center fs-4">Tidak ada berita yang ditemukan.</p>
        </div> 

        <div class="col-lg-4">
          @include('layouts.sidebar')
        </div><!-- End blog sidebar -->

      @endif    

    </div>      
  </div>
</section><!-- End Blog Section -->

{{-- Menampilkan link untuk halaman berita utama selanjutnya --}}
<div class="d-flex justify-content-center">
  {{ $berita->links() }}
</div>
    
@endsection