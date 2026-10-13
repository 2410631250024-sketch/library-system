@extends('layouts.app')

@section('title', 'Detail Buku')

@section('content')
    <a href="{{ route('books.index') }}">Daftar Buku</a>
        <tbody>
        
                <ul>
                    <td>ID: {{ $book->id }}</td>
                    <p>Judul: {{ $book->title }}</p>
                    <p>Penulis: {{ $book->author }}</p>
                    <p>Tahun: {{ $book->year }}</p>
                    <p>Stok: {{ $book->stock }}</p>
</ul>

        </tbody>
    </table>
@endsection