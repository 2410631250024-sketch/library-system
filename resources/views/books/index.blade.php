@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Hanya tampilkan tombol Tambah Buku jika user diizinkan membuat buku --}}
    @can('create', App\Models\Book::class)
        <a href="{{ route('books.create') }}">Tambah Buku</a>
    @endcan

    <ul>
        @foreach ($books as $book)
            <li>
                <h3>{{ $book->title }} <small>( {{ $book->category?->name ?? 'Belum ada kategori' }} )</small> </h3>
                <a href="{{ route('books.show', $book) }}">Detail Buku</a>

                {{-- Hanya tampilkan Edit Buku jika user diizinkan mengedit buku ini --}}
                @can('update', $book)
                    | <a href="{{ route('books.edit', $book) }}">Edit Buku</a>
                @endcan
                
                {{-- TERAPKAN POLICY HAPUS BUKU DI SINI --}}
                @can('delete', $book)
                    <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku {{ $book->title }}?');">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Hapus Buku
                        </button>
                    </form>
                @endcan
            </li>
        @endforeach
    </ul>
@endsection