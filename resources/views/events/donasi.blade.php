<x-index>
<section>
    <div class="container" data-aos="fade-up">
        <main class="py-4">
          <div class="container">
              
    <div class="container">
        <h1>Daftar Donasi aktif</h1>

        @if (count($events) > 0)
            <div class="row">
                @foreach ($events as $event)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 border-primary"> <!-- Added 'h-100' to make all cards the same height and 'border-primary' for an attractive border color -->
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text">{{ $event->description }}</p>
                                <p>{{ $event->waktu_mulai->format('d F Y') }} &mdash; {{ $event->waktu_akhir->format('d F Y') }}</p>
                                @if($event->lokasi == 'Daring')
                                    <a href="{{ route('events.donation') }}" class="btn btn-primary">Ikut berdonasi</a>
                                @else
                                    <span class="text-muted"></span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>Tidak ada kegiatan hari ini.</p>
        @endif
    </div>
        </div>
      </main>
    </div>
  </section>
</x-index>