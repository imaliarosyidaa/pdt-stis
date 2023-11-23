@extends('layouts.navbar')

@section('blog')
    <!-- ======= Breadcrumbs ======= -->
    @section('breadcrumbs')
      <li><a href="index.html">Home</a></li>
      <li><a href="/berita">Berita</a></li>
      <li>{{ $title }}</li>
    @endsection

{{-- Main section --}}
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">
      <div class="row">
        <div class="col-lg-8 entries">
          <article class="entry entry-single">
            
            {{-- Menampilkan foto/ thumbnails --}}
            <div class="entry-img">
              @if($berita->image)
                <img src="{{ asset('storage/' . $berita->image) }}" alt="" class="img-fluid">
              @else
                <img src="https://source.unsplash.com/1000x600?{{ $berita->category->name }}" alt="" class="img-fluid">
              @endif
            </div>
           
            {{-- Menampilkan judul berita --}}
            <h2 class="entry-title">
              <a href="blog-single.html">{{ $berita->title }}</a>
            </h2>
           
            {{-- Menampilkan nama penulis dan waktu publish berita --}}
            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $berita->author }}</a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $berita->created_at->diffForHumans() }}</time></a></li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{ $berita->category->name }}</time></a></li>
              </ul>
            </div>
           
            {{-- Menampilkan isi --}}
            <div class="entry-content">
                {!! $berita->body !!}
            </div>
            
            <div class="entry-footer">
              <i class="bi bi-folder"></i>
              <ul class="cats">
                <li><a href="#">Business</a></li>
              </ul>
              <i class="bi bi-tags"></i>
              <ul class="tags">
                <li><a href="#">Creative</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div>
  
          </article><!-- End blog entry -->
        </div>
        
        {{-- Menampilkan sidebar --}}
        <div class="col-lg-4">
          @include('layouts.sidebar')
        </div><!-- End blog sidebar -->
      
      </div>
    </div>
</section>
@endsection