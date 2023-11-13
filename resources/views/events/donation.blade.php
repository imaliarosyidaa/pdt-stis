@extends('layouts.app')

@section('content')
    @if ($eventsAvailable)
        <h1>Halaman Donasi</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('donations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', 'Anonymous') }}">
            </div>

            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal:</label>
                <input type="number" class="form-control" name="nominal" value="{{ old('nominal') }}" required>
            </div>

            <div class="mb-3">
                <label for="file" class="form-label">Upload File:</label>
                <input type="file" class="form-control" name="file" accept=".jpg, .png, .jpeg">
            </div>

            <div class="mb-3">
                <label for="payment_method" class="form-label">Metode Pembayaran:</label>
                <select class="form-control" name="payment_method" required>
                    <option value="BNI">BNI</option>
                    <option value="BRI">BRI</option>
                    <option value="BCA">BCA</option>
                    <option value="OVO">OVO</option>
                </select>

            <div class="mb-3">
                <label for="message" class="form-label">Message:</label>
                <textarea class="form-control" name="message" rows="4">{{ old('message') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
    @else
        <h1>Periode donasi belum dibuka.</h1>
        <script>
            @if(!$eventsAvailable)
                    alert('No events available for donation today.');
            @endif
        </script>
    @endif
@endsection