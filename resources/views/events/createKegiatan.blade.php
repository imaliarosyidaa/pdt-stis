@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Create Event</h2>

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

        <form action="{{ route('events.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="quota">Quota:</label>
                <input type="number" name="quota" id="quota" class="form-control">
            </div>

            <div class="form-group">
                <label for="lokasi">Location:</label>
                <input type="text" name="lokasi" id="lokasi" class="form-control">
            </div>

            <div class="form-group">
                <label for="waktu_mulai">Start Time:</label>
                <input type="date" name="waktu_mulai" id="waktu_mulai" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="waktu_akhir">End Time:</label>
                <input type="date" name="waktu_akhir" id="waktu_akhir" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Event</button>
        </form>
    </div>
@endsection