@extends('layouts.app')

@section('title', $title)

@section('content')
    <a href="{{ route('books.create') }}">Tambah Buku</a>

    <ul>
        @foreach ($books as $book)
            <h3>{{ $book->title }}</h3>
            <a href="{{ route('books.show', $book) }}">Detail Buku</a>
        @endforeach
    </ul>
@endsection