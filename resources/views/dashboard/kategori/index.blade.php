@extends('dashboard.layouts.navbar')

{{-- Judul halaman --}}
@section('berita')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Kategori Berita</h1>
</div>

{{-- Notifikasi ketika kategori berhasil di tambahkan/ di update/ di delete --}}
@if(session()->has('success'))
  <div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
  </div>
@endif
@if(session()->has('error'))
<div class="alert alert-warning col-lg-6" role="alert">
  {{ session('error') }}
</div>
@endif

     {{-- Tabel berita --}}
     <div class="table-responsive">
        <a href="/dashboard/berita" class="btn btn-success mb-3">Kembali</a>
        {{-- <a href="/dashboard/kategori/create" class="btn btn-primary mb-3">Tambah Kategori</a> --}}
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCategoryModal">
            Tambah Kategori
        </button>

        <!-- Modal Pop-up untuk Tambah Kategori -->
        <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addCategoryModalLabel">Tambah Kategori Baru</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Form untuk menambah kategori -->
                        <form action="/dashboard/kategori" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control" id="name" name="name" required autofocus>
                                <input type="hidden" class="form-control" id="slug" name="slug">
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Kategori</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <td scope="col">#</td>
            <td scope="col">Nama Kategori</td>
            <td scope="col">Action</td>
          </tr>
        </thead>
        <tbody>
            {{-- menampilkan semua kategori --}}
          @foreach($categories as $kategori) 
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <th>{{ $kategori->name }}</th>
            <th>
                {{-- hapus kategori --}}
              <form action="/dashboard/kategori/{{ $kategori->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Apakah Anda ingin menghapus berita ini?')">
                    <span data-feather="eye">delete</span>
                </button>
              </form>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
     </div>
     <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');
    
        name.addEventListener('change', function() {
            fetch('/dashboard/kategori/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });
    </script>
@endsection