<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../admin.assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../admin.assets/css/styles.min.css" />
  <link rel="stylesheet" href="../admin.assets/css/custom.css" />
  <link rel="stylesheet" href="../admin.assets/css/form.css">
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../admin.assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu"></span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="./ui-keuangan.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-moneybag"></i>
                  </span>
                  <span class="hide-menu">Keuangan</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="./ui-volunteer.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-users"></i>
                  </span>
                  <span class="hide-menu">Volunteer</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./ui-donasi.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-wallet"></i>
                  </span>
                  <span class="hide-menu">Donasi</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./ui-galeri.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-photo"></i>
                  </span>
                  <span class="hide-menu">Galeri</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="./ui-publikasi.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-news"></i>
                  </span>
                  <span class="hide-menu">Berita</span>
                </a>
              </li>
            
            
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../admin.assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

      <!--  Tabel Gallery -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="card-title fw-semibold">Tabel Daftar Berita</h5>
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
                                <a href="/dashboard/galeri/{{ $gallery->id }}" class="badge bg-info p-1"><span data-feather="eye">show</span></a>
                                <a href="/dashboard/galeri/{{ $gallery->id }}/edit" class="badge bg-warning p-1"><span data-feather="edit">edit</span></a>
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
    
        <!-- Menampilkan link untuk halaman berita utama selanjutnya  -->
  <div class="d-flex justify-content-center">
                  {{ $galleries->links() }}
                </div>
  </div>
  <script src="../admin.assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../admin.assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../admin.assets/js/sidebarmenu.js"></script>
  <script src="../admin.assets/js/app.min.js"></script>
  <script src="../admin.assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
