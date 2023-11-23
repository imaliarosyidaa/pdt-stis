@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        @if (session('success'))
            <!-- Success alert code here -->
        @endif
        <livewire:keuangan-table/>
    </div>
@endsection