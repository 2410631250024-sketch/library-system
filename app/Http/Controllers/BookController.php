<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['title' => 'Pemrograman PHP', 'author' => 'Andi', 'year' => 2020],
            ['title' => 'Laravel untuk Pemula', 'author' => 'Budi', 'year' => 2021],
            ['title' => 'Basis Data', 'author' => 'Cici', 'year' => 2019],
            ['title' => 'Algoritma dan Pemrograman', 'author' => 'Dedi', 'year' => 2018],
            ['title' => 'Pemrograman Berorientasi Objek', 'author' => 'Eka', 'year' => 2022],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}