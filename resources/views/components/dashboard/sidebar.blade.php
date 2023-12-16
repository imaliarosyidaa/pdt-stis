<link rel="stylesheet" href="{{ ('/assets/css/styles.min.css') }}" />
<aside class="left-sidebar">
  <div class="mt-4">
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <div>
        <a href="/" class="text-nowrap d-flex flex-row ">
          <img src="{{asset('/assets/img/logo pdt.png') }}" class="w-10 h-10 me-3" alt="" />
          <h1>PDT STIS</h1>
        </a>
      </div>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu"></span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/dashboard" aria-expanded="false">
            <span>
              <i class="ti ti-layout-dashboard"></i>
            </span>
            <span class="hide-menu">Dashboard</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin/keuangan" aria-expanded="false">
            <span>
              <i class="ti ti-moneybag"></i>
            </span>
            <span class="hide-menu">Keuangan</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/events" aria-expanded="false">
            <span>
              <i class="ti ti-calendar"></i>
            </span>
            <span class="hide-menu">Events</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin/volunteer" aria-expanded="false">
            <span>
              <i class="ti ti-users"></i>
            </span>
            <span class="hide-menu">Volunteer</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin/donations" aria-expanded="false">
            <span>
              <i class="ti ti-wallet"></i>
            </span>
            <span class="hide-menu">Donasi</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/dashboard/galeri" aria-expanded="false">
            <span>
              <i class="ti ti-photo"></i>
            </span>
            <span class="hide-menu">Galeri</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/dashboard/berita" aria-expanded="false">
            <span>
              <i class="ti ti-news"></i>
            </span>
            <span class="hide-menu">Berita</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="/admin/testimoni" aria-expanded="false">
            <span>
              <i class="ti ti-folder-minus "></i>
            </span>
            <span class="hide-menu">Testimoni dan Feedback</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>

<script src="{{ asset ('/assets/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset ('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset ('/assets/js/sidebarmenu.js') }}"></script>
  <script src="{{ asset ('/assets/js/app.min.js') }}"></script>
  <script src="{{ asset ('/assets/libs/simplebar/dist/simplebar.js') }}"></script>