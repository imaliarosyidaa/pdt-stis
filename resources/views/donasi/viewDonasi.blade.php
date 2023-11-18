@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        @if (session('success'))
            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <script>
                setTimeout(function () {
                    document.getElementById('success-alert').style.display = 'none';
                }, 5000);
            </script>
        @endif

        {{-- Tabel start--}}
        <div class="container-fluid">
            <div class="container-fluid">
              <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h5 class="card-title fw-semibold">Tabel Daftar Volunteer</h5>
                        <div class="d-flex align-items-center">
                            <div class="dropdown me-3">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="sortingDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Urut dari yang terlama
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="sortingDropdown">
                                    <li><a class="dropdown-item" href="{{ route('donations.viewDonasi', ['sort' => 'terbaru']) }}">Urut dari yang terbaru</a></li>
                                    <li><a class="dropdown-item" href="{{ route('donations.viewDonasi', ['sort' => 'terlama']) }}">Urut dari yang terlama</a></li>
                                </ul>
                            </div>
                            <div class="input-group">
                                <form action="{{ route('donations.viewDonasi') }}" method="GET" class="d-flex align-items-center">
                                <input type="text" class="form-control" placeholder="Cari tahun donasi" aria-label="Search" aria-describedby="searchButton" value="{{ $year }}" name="year">
                                <button type="submit" class="btn btn-primary" type="button" id="searchButton">Cari</button>
                            </form>
                            </div>
                        </div>
                    </div>
                  <div class="card">
                    <div class="table-responsive" id="donationsTable">
                        @include('donasi.table')
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection
