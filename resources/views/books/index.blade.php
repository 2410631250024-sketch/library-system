@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <a href="{{ route('books.create') }}">Tambah Buku</a>

    <ul>
        @foreach ($books as $book)
            <h3>{{ $book->title }}</h3>
            <a href="{{ route('books.show', $book) }}">Detail Buku</a>
            <a href="{{ route('books.edit', $book) }}">Edit Buku</a>
            <form action="{{ route('books.destroy', $book) }}" method="POST">
                @csrf
                @method('DELETE')
            @endforeach
</ul>
@endsection