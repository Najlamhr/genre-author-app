<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi (optional, tapi direkomendasikan)
    protected $fillable = ['name'];

    // Relasi many-to-many: banyak genre bisa dimiliki banyak buku
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
