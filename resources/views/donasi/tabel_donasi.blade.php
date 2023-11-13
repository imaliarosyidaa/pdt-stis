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
                setTimeout(function () {
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
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donations as $donation)
                    <tr>
                        <td>{{ $donation->id }}</td>
                        <td>{{ $donation->nominal }}</td>
                        <td>
                            <img src="{{ asset($donation->link) }}" alt="Donation Image" style="max-width: 100px; max-height: 100px;">
                        </td>
                        <td>{{ $donation->status }}</td>
                        <td>
                            <form action="{{ route('donations.updateStatus', $donation->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <select name="new_status" onchange="this.form.submit()">
                                    <option value="belum dikonfirmasi" {{ $donation->status === 'belum dikonfirmasi' ? 'selected' : '' }}>Belum Dikonfirmasi</option>
                                    <option value="disetujui" {{ $donation->status === 'disetujui' ? 'selected' : '' }}>Disetujui</option>
                                    <option value="ditolak" {{ $donation->status === 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
