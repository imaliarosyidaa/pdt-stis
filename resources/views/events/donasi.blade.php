@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Donasi aktif</h1>

        @if (count($events) > 0)
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text"> {{ $event->description }}</p>
                                <a href="{{ route('events.donation') }}">Ikut berdonasi</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Tidak ada kegiatan hari ini.</p>
        @endif
    </div>
@endsection
