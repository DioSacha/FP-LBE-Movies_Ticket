@extends('layouts.app')

@section('title', 'Daftar Film')

@section('content')
    <h1>Daftar Film</h1>
    <a href="{{ route('movies.create') }}">Tambahkan Film Baru</a>

    <ul>
        @foreach ($movies as $movie)
            <li>
                <a href="{{ route('movies.show', $movie) }}">{{ $movie->title }}</a>
                ({{ $movie->release_date }})
            </li>
        @endforeach
    </ul>
@endsection
