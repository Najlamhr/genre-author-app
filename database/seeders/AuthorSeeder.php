<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'John Doe', 'email' => 'john@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jane Smith', 'email' => 'jane@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bob Brown', 'email' => 'bob@example.com', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Charlie Green', 'email' => 'charlie@example.com', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
