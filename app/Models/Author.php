<?php

namespace App\Models;

class Author
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Tere Liye'],
            ['id' => 2, 'name' => 'Andrea Hirata'],
            ['id' => 3, 'name' => 'Dewi Lestari'],
            ['id' => 4, 'name' => 'Habiburrahman El Shirazy'],
            ['id' => 5, 'name' => 'Asma Nadia'],
        ];
    }
}
