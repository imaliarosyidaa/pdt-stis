@extends('layouts.app')

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
            setTimeout(function() {
                document.getElementById('success-alert').style.display = 'none';
            }, 5000);
        </script>
    @endif

    <h2>Donation History</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nominal</th>
                <th>Tanggal donasi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donations as $donation)
                <tr>
                    <td>{{ $donation->id }}</td>
                    <td>{{ $donation->nominal }}</td>
                    <td>{{$donation->created_at->format('Y-m-d')}}</td>
                    <td>{{ $donation->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection