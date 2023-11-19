@extends('dashboard.layouts.navbar')

@section('berita')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1>Berita</h1>
</div>

@if(session()->has('success'))
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

     {{-- Tabel berita --}}
     <div class="table-responsive">
        <a href="/dashboard/berita/create" class="btn btn-primary mb-3">Tambah Berita</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <td scope="col">#</td>
            <td scope="col">Judul</td>
            <td scope="col">Kategori</td>
            <td scope="col">Action</td>
          </tr>
        </thead>
        <tbody>
          @foreach($berita as $beritaTable) 
          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <th>{{ $beritaTable->title }}</th>
            <th>{{ $beritaTable->category->name }}</th>
            <th>
              <a href="/dashboard/berita/{{ $beritaTable->slug }}" class="badge bg-info"><span data-feather="eye">show</span></a>
              <a href="/dashboard/berita/#" class="badge bg-warning"><span data-feather="eye">edit</span></a>
              <a href="/dashboard/berita/#" class="badge bg-danger"><span data-feather="eye">delete</span></a>
            </th>
          </tr>
          @endforeach
        </tbody>
      </table>
     </div>
@endsection