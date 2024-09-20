<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Movie;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    // Menampilkan form untuk menambah tiket
    public function create()
    {
        $users = User::all(); // Ambil semua pengguna
        $movies = Movie::all(); // Ambil semua film
        return view('tickets.create', compact('users', 'movies'));
    }

    // Menyimpan tiket baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'movie_id' => 'required|exists:movies,id',
            // 'quantity' => 'required|integer|min=1',
        ]);

        // Menyimpan tiket baru
        Ticket::create([
            'user_id' => $request->user_id,
            'movie_id' => $request->movie_id,
            'quantity' => $request->quantity,
        ]);

        return redirect()->route('tickets.create')->with('success', 'Tiket berhasil ditambahkan');
    }
}
