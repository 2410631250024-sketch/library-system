<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            ['title' => 'Pemrograman PHP', 'author' => 'Andi', 'year' => 2024, 'stock' => 5],
            ['title' => 'Laravel untuk Pemula', 'author' => 'Budi', 'year' => 2023, 'stock' => 10],
            ['title' => 'Basis Data', 'author' => 'Cici', 'year' => 2022, 'stock' => 8],
            ['title' => 'Algoritma dan Struktur Data', 'author' => 'Dedi', 'year' => 2021, 'stock' => 4],
            ['title' => 'Pengembangan Web Modern', 'author' => 'Eka', 'year' => 2025, 'stock' => 7],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
```[cite: 1, 2]