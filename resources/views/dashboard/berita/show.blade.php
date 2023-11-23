@extends('dashboard.layouts.navbar')

@section('berita')
<div class="container" data-aos="fade-up">
    <div class="row">
      <div class="col-lg-8 entries">
        <article class="entry entry-single">
                   
          {{-- Menampilkan judul berita --}}
          <h2 class="entry-title">
            <a href="blog-single.html">{{ $berita->title }}</a>
          </h2>
         
          <a href="/dashboard/berita" class="btn btn-success"><span data-feather="eye">Kembali</span></a>
          <a href="/dashboard/berita/{{ $berita->slug }}/edit" class="badge bg-warning"><span data-feather="eye">edit</span></a>
          <form action="/dashboard/berita/{{ $berita->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger" onclick="return confirm('Apakah Anda ingin menghapus berita ini?')">
                <span data-feather="eye">delete</span>
            </button>
          </form>
              
          {{-- Menampilkan foto/ thumbnails --}}
          <div class="entry-img">
            @if($berita->image)
              <img src="{{ asset('storage/' . $berita->image) }}" alt="" class="img-fluid">
            @else
            <img src="https://source.unsplash.com/1000x600?{{ $berita->category->name }}" alt="" class="img-fluid">
            @endif
          </div>

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
    
    
    </div>
  </div>
@endsection