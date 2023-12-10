<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../admin.assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('../admin.assets/css/styles.min.css')}}" />
  <link rel="stylesheet" href="{{asset('../admin.assets/css/custom.css')}}" />
  <link rel="stylesheet" href="{{asset('../admin.assets/css/form.css')}}">
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
            <img src="{{asset('../admin.assets/images/logos/dark-logo.svg')}}" width="180" alt="" />
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

   
    <!-- <section class="foto-section"> -->
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-8 entries">
                    <article class="entry entry-single">

                        <!-- {{-- Menampilkan judul foto --}} -->
                        <h2 class="entry-title">
                            <a>{{ $gallery->title }}</a>
                        </h2>

                        <!-- {{-- Menampilkan tombol kembali, edit, dan delete --}} -->
                        <div class="mb-3">
                            <a href="/dashboard/galeri" class="btn btn-success p-1"><span data-feather="arrow-left"></span> Kembali</a>
                            <a href="/dashboard/galeri/{{ $gallery->id }}/edit" class="btn btn-warning p-1"><span data-feather="edit"></span> Edit</a>
                            <form action="/dashboard/galeri/{{ $gallery->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger p-1" onclick="return confirm('Apakah Anda ingin menghapus foto ini?')">
                                    <span data-feather="trash-2"></span> Hapus
                                </button>
                            </form>
                        </div>

                        <!-- {{-- Menampilkan foto --}} -->
                        <div class="entry-img mb-3">
                            <img src="{{ asset('/storage/public/posts/'.$gallery->filename) }}" alt="" class="img-fluid">
                        </div>

                        <!-- {{-- Menampilkan title, deskripsi, dan tahun foto --}} -->
                        <div class="entry-meta mb-3">
                            <ul class="list-inline">
                                <li class="list-inline-item"><i class="bi bi-person"></i>{{ $gallery->title }}</a></li>
                                <li class="list-inline-item"><i class="bi bi-clock"></i>{{ $gallery->caption }}</time></a></li>
                                <li class="list-inline-item"><i class="bi bi-clock"></i>{{ $gallery->tahun }}</li>
                            </ul>
                        </div>

                    </article>
                </div>
            </div>
        </div>
    <!-- </section> -->
    
 
    
  </div>
  <script src="{{asset('../admin.assets/libs/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('../admin.assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('../admin.assets/js/sidebarmenu.js')}}"></script>
  <script src="{{asset('../admin.assets/js/app.min.js')}}"></script>
  <script src="{{asset('../admin.assets/libs/simplebar/dist/simplebar.js')}}"></script>
  
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
  <script>
    feather.replace();
  </script>

</body>

</html>