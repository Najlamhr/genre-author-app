<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Jika ingin mengizinkan mass assignment
    protected $fillable = ['title', 'author_id', 'year'];

    // Relasi: satu buku dimiliki satu author
    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    // Relasi: satu buku bisa punya banyak genre
    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
