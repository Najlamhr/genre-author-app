<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Laravel Basics', 'author_id' => 1, 'year' => 2020, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Advanced PHP', 'author_id' => 2, 'year' => 2019, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'JavaScript Essentials', 'author_id' => 3, 'year' => 2021, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Database Design', 'author_id' => 4, 'year' => 2018, 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'Web Security', 'author_id' => 5, 'year' => 2022, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
