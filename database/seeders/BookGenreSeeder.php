<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Genre;

class BookGenreSeeder extends Seeder
{
    public function run(): void
{
    $genres = Genre::all();

    if ($genres->count() === 0) {
        $this->command->info('No genres found, skipping BookGenreSeeder.');
        return;
    }

    Book::all()->each(function ($book) use ($genres) {
        $book->genres()->attach($genres->random(rand(1, min(2, $genres->count())))->pluck('id')->toArray());
    });
}
}