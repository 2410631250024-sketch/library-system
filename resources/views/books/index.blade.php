@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <a href="{{ route('books.create') }}">Tambah Buku</a>

    <ul>
        @foreach ($books as $book)
            <h3>{{ $book->title }} <small>( {{ $book->category?->name ?? 'Belum ada kategori' }} )</small> </h3>
            <a href="{{ route('books.show', $book) }}">Detail Buku</a>
            <a href="{{ route('books.edit', $book) }}">Edit Buku</a>
            
            {{-- TAMBAHKAN onsubmit DI TAG FORM DI BAZAWAN INI --}}
            <form action="{{ route('books.destroy', $book) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku {{ $book->title }}?');">
                @csrf
                @method('DELETE')

                <button type="submit">
                    Hapus Buku
                </button>
            </form>
        @endforeach
    </ul>
@endsection