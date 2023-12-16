<x-app-layout>
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="body-wrapper">
      <!--  Tabel Gallery -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title fw-semibold">Tabel Daftar Foto</h5>
                <div class="d-flex align-items-center">

                  <!-- {{-- Search --}} -->
                  <div class="input-group">
                    <form action="/dashboard/galeri" class="input-group d-flex">
                      <!-- @if(request('category'))
                              <input type="hidden" name="category" value="{{ request('category') }}">
                            @endif -->
                      <input type="text" class="form-control" name="search" placeholder="Search.." aria-label="Search" aria-describedby="searchButton">
                      <button class="btn btn-primary" type="submit" id="searchButton">Cari</button>
                    </form>
                  </div><!-- End search form -->
                </div>
              </div>

              @if(session()->has('success'))
              <div class="alert alert-success" role="alert">
                {{ session('success') }}
              </div>
              @endif
              @if(session()->has('error'))
              <div class="alert alert-warning" role="alert">
                {{ session('error') }}
              </div>
              @endif
              <div class="mb-3">
                <a href="/dashboard/galeri/create" class="btn btn-primary">
                  <span data-feather="plus-circle"></span> Tambah
                </a>
                <!-- <a href="/dashboard/kategori" class="btn btn-primary">
                      <span data-feather="list"></span> Kategori
                  </a> -->
              </div>

              <!-- Display message when there are no news articles -->
              @if($galleries->isEmpty())
              <div class="alert alert-info" role="alert">
                Tidak ada foto yang tersedia.
              </div>
              @else

              <div class="card">
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Judul</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Deskripsi</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tahun</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Action</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($galleries as $gallery)
                      <tr>
                        <td class="border-bottom-0">{{ $gallery->id }}</td>
                        <td>{{ $gallery->title }}</td>
                        <td>{{ $gallery->caption}}</td>
                        <td>{{ $gallery->tahun}}</td>
                        <td>
                          <a href="/dashboard/galeri/{{ $gallery->id }}" class="badge bg-info p-1" onclick="return confirm('Apakah Anda yakin ingin menampilkan foto ini?')"><span data-feather="eye">show</span></a>
                          <a href="/dashboard/galeri/{{ $gallery->id }}/edit" class="badge bg-warning p-1" onclick="return confirm('Apakah Anda yakin ingin mengedit foto ini?')"><span data-feather="edit">edit</span></a>
                          <form action="/dashboard/galeri/{{ $gallery->id }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0 p-1" onclick="return confirm('Apakah Anda ingin menghapus foto ini?')">
                              <span data-feather="trash-2">delete</span>
                            </button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>

                @endif
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Menampilkan link untuk halaman berita utama selanjutnya  -->
    <div class="d-flex justify-content-center">
      {{ $galleries->links() }}
    </div>
  </div>
</x-app-layout>