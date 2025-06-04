<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // Jika kamu ingin menggunakan mass assignment
    protected $fillable = ['name'];

    // Relasi: satu author punya banyak buku
    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
