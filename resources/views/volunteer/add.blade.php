@extends('layouts.volunteer')
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset('/css/styles.min.css') }}"/>
  <link rel="stylesheet" href="{{ asset('/css/custom.css') }}"/>
</head>

<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <aside class="left-sidebar">
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="./index.html" class="text-nowrap logo-img">
                <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
                </a>
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
                <a class="sidebar-link" href="./ui-keuangan.html" aria-expanded="false">
                  <span>
                    <i class="ti ti-moneybag"></i>
                  </span>
                  <span class="hide-menu">Keuangan</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/volunteers" aria-expanded="false">
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
      </div>
    </aside>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
  <div class="body-wrapper">
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">Forms</h5>
              <div class="card">
                <div class="card-body">
                <form action="{{ route('volunteers.store') }}" method="POST" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="form-group">
                            <label class="font-weight-bold">USER ID</label>
                            <input type="text" class="form-control @error('user_id') is-invalid @enderror" name="user_id" value="{{ old('user_id') }}" placeholder="Masukkan User ID">
                        
                            <!-- error message untuk title -->
                            @error('user_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">NIM</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') }}" placeholder="Masukkan NIM">
                        
                            <!-- error message untuk title -->
                            @error('nim')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">DEVISI</label>
                            <input type="text" class="form-control @error('devisi') is-invalid @enderror" name="devisi" value="{{ old('devisi') }}" placeholder="Masukkan Devisi">
                        
                            <!-- error message untuk title -->
                            @error('devisi')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">No Wa</label>
                            <input type="text" class="form-control @error('no_wa') is-invalid @enderror" name="no_wa" value="{{ old('no_wa') }}" placeholder="Masukkan Nomor WA">
                        
                            <!-- error message untuk title -->
                            @error('no_wa')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">CV</label>
                            <input type="file" class="form-control @error('link') is-invalid @enderror" name="link">
                        
                            <!-- error message untuk title -->
                            @error('link')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Status Pendaftaran</label>
                            <input type="text" class="form-control @error('status_pendaftaran') is-invalid @enderror" name="status_pendaftaran" value="{{ old('status_pendaftaran') }}" placeholder="Masukkan Status Pendaftaran">
                        
                            <!-- error message untuk title -->
                            @error('status_pendaftaran')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="font-weight-bold">Created At</label>
                            <input type="date" class="form-control @error('created_at') is-invalid @enderror" name="created_at" value="{{ old('created_at') }}" placeholder="Masukkan Tanggal">
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    </form> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  <script src="{{asset ('/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{asset ('/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{asset ('/js/sidebarmenu.js') }}"></script>
  <script src="{{asset ('/js/app.min.js') }}"></script>
  <script src="{{asset ('/libs/simplebar/dist/simplebar.js') }}"></script>
  </x-app-layout>
</body>
</html>