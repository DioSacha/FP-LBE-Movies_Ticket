<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'genre', 'release_date'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
