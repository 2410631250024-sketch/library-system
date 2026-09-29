<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            ['title' => 'Laskar Pelangi', 'author' => 'Andrea Hirata', 'year' => 2005, 'stock' => 10],
            ['title' => 'Bumi Manusia', 'author' => 'Pramoedya Ananta Toer', 'year' => 1980, 'stock' => 5],
            ['title' => 'Pulang', 'author' => 'Tere Liye', 'year' => 2015, 'stock' => 8],
            ['title' => 'Hujan', 'author' => 'Tere Liye', 'year' => 2016, 'stock' => 12],
            ['title' => 'Filosofi Teras', 'author' => 'Henry Manampiring', 'year' => 2018, 'stock' => 15],
            ['title' => 'Cantik Itu Luka', 'author' => 'Eka Kurniawan', 'year' => 2002, 'stock' => 7],
            ['title' => 'Laut Bercerita', 'author' => 'Leila S. Chudori', 'year' => 2017, 'stock' => 9],
            ['title' => 'Dilan 1990', 'author' => 'Pidi Baiq', 'year' => 2014, 'stock' => 20],
            ['title' => 'Negeri 5 Menara', 'author' => 'Ahmad Fuadi', 'year' => 2009, 'stock' => 11],
            ['title' => 'Perahu Kertas', 'author' => 'De Lestari', 'year' => 2009, 'stock' => 14],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}