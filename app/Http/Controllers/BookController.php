<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Gate;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Gate::authorize('viewAny', Book::class);

        $books = Book::with('category')->get();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gate::authorize('create', Book::class);

        $categories = Category::orderBy('name')->get();
        return view('books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Gate::authorize('create', Book::class);

        $validated = $request->validate([
            'title'       => 'required|string|min:3|max:255|unique:books,title',
            'author'      => 'required|string|min:3|max:255',
            'year'        => 'required|integer|min:1900|max:' . date('Y'),
            'stock'       => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ]);

        Book::create($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        Gate::authorize('view', $book);

        $title = "Detail Buku";

        return view('books.show', compact('title', 'book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        Gate::authorize('update', $book);

        $title = "Edit Buku";
        $categories = Category::orderBy('name')->get();
        return view('books.edit', compact('title', 'book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        Gate::authorize('update', $book);

        $validated = $request->validate([
            'title'       => 'required|string|min:3|max:255|unique:books,title,' . $book->id,
            'author'      => 'required|string|min:3|max:255',
            'year'        => 'required|integer|min:1900|max:' . date('Y'),
            'stock'       => 'required|integer|min:0|max:1000',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book->update($validated);

        return redirect()
            ->route('books.index')
            ->with('success', 'Data buku berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        Gate::authorize('delete', $book);

        $book->delete();

        return redirect()
            ->route('books.index')
            ->with('success', 'Buku berhasil dihapus.');
    }
}