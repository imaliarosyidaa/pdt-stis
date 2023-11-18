@extends('layouts.admin')
@section('content')
    <div class="container mt-5">
        <h2>Buat Kegiatan Donasi</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <p class="mb-0 text-right">
            <span class="text-danger" id="i4" aria-label="Required question">*</span>
            <span class="ml-2 text-danger">Wajib diisi</span>
        </p>

        <form action="{{ route('events.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="title" class="form-label">
                    Title:
                    <span class="text-danger vnumgf" id="i4" aria-label="Required question">*</span>
                </label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description" class="form-label">
                    Description:
                    <span class="text-danger vnumgf" id="i4" aria-label="Required question">*</span>
                </label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="quota" class="form-label">
                    Quota:
                    <span class="text-danger vnumgf" id="i4" aria-label="Required question">*</span>
                </label>
                <input type="number" name="quota" id="quota" class="form-control">
            </div>

            <div class="form-group">
                <label for="lokasi" class="form-label">
                    Metode
                    <span class="text-danger vnumgf" id="i4" aria-label="Required question">*</span>
                </label>
                <select class="form-select" name="lokasi" id="lokasi" required>
                    <option value="Daring">Daring</option>
                    <option value="Luring">Luring</option>
                </select>
            </div>

            <div class="form-group">
                <label for="waktu_mulai" class="form-label">
                    Start Time:
                    <span class="text-danger vnumgf" id="i4" aria-label="Required question">*</span>
                </label>
                <input type="date" name="waktu_mulai" id="waktu_mulai" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="waktu_akhir" class="form-label">
                    End Time:
                    <span class="text-danger vnumgf" id="i4" aria-label="Required question">*</span>
                </label>
                <input type="date" name="waktu_akhir" id="waktu_akhir" class="form-control" required>
            </div>
            <br>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary">Create Event</button>
            </div>
        </form>
    </div>
@endsection
