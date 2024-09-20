@extends('layouts.app')

@section('title', 'Daftar Film')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Film</h1>
        <a href="{{ route('movies.create') }}" class="btn btn-primary">Tambahkan Film Baru</a>
    </div>

    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->genre }}</p>
                        <p class="card-text"><small class="text-muted">Rilis: {{ $movie->release_date }}</small></p>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
