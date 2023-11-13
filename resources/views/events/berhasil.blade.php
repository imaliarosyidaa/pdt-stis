@extends('layouts.app')
@section('content')
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

        <h1 style="text-align: center">Daftar Donasi</h1>
        @if (count($events) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Quota</th>
                    <th>Lokasi</th>
                    <th>Waktu Mulai</th>
                    <th>Waktu Akhir</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->quota }}</td>
                        <td>{{ $event->lokasi }}</td>
                        <td>{{ $event->waktu_mulai}}</td>
                        <td>{{ $event->waktu_akhir}}</td>
                        <td>
                            {{-- <a href="{{ route('events.edit', $event->id) }}" class="btn btn-primary">Edit</a> --}}
                            <form action="{{ route('events.hapusKegiatan', $event->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this event?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada kegiatan.</p>
    @endif

    <a href="{{ route('events.createKegiatan') }}">
        <button class="btn btn-primary">+</button>
    </a>

@endsection
