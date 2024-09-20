@extends('layouts.app')

@section('title', 'Tambahkan Film Baru')

@section('content')
    <div class="container">
        <h1>Tambahkan Film Baru</h1>

        <form action="{{ route('movies.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul Film:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre:</label>
                <input type="text" name="genre" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="release_date" class="form-label">Tanggal Rilis:</label>
                <input type="date" name="release_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
