<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $books = Book::all();

    return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Book::create([
        'title' => $request->title,
        'author' => $request->author,
        'year' => $request->year,
        'stock' => $request->stock,
    ]);

    return redirect()->route('books.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        $title = "Detail Buku";

        return view ('books.show', compact('title', 'book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $title = "Edit Buku";

        return view ('books.edit', compact('title', 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        $book->update([
        'title' => $request->title,
        'author' => $request->author,
        'year' => $request->year,
        'stock' => $request->stock,
        ]);

    return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
