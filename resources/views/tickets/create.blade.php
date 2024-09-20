@extends('layouts.app')

@section('title', 'Tambahkan Tiket')

@section('content')
<div class="container">
    <h1>Tambahkan Tiket Baru</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('tickets.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="user_id" class="form-label">Pilih Pengguna</label>
            <select name="user_id" class="form-control" required>
                <option value="">Pilih Pengguna</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="movie_id" class="form-label">Pilih Film</label>
            <select name="movie_id" class="form-control" required>
                <option value="">Pilih Film</option>
                @foreach($movies as $movie)
                    <option value="{{ $movie->id }}">{{ $movie->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Jumlah Tiket</label>
            <input type="number" name="quantity" class="form-control" required min="1">
        </div>

        <button type="submit" class="btn btn-primary">Tambahkan Tiket</button>
    </form>
</div>
@endsection
