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
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#imageModal{{$donation->id}}">
                                View Image
                            </button>
                            <div class="modal fade" id="imageModal{{$donation->id}}" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel{{$donation->id}}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="imageModalLabel{{$donation->id}}">Donation Image</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset($donation->link) }}" alt="Donation Image" style="max-width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
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
