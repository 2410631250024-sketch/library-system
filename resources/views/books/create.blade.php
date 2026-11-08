\@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<h2>Tambah Buku Baru</h2>

<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        <label for="title">Judul Buku</label>
        <input 
            type="text" 
            id="title"
            name="title" 
            placeholder="Judul buku"
            value="{{ old('title') }}"
        >
        
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="author">Penulis Buku</label>
        <input 
            type="text" 
            id="author"
            name="author" 
            placeholder="Penulis Buku"
            value="{{ old('author') }}"
        >
        
        @error('author')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="year">Tahun Terbit</label>
        <input 
            type="number" 
            id="year"
            name="year" 
            placeholder="Tahun Terbit"
            value="{{ old('year') }}"
        >
        
        @error('year')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="stock">Stok Buku</label>
        <input 
            type="number" 
            id="stock"
            name="stock" 
            placeholder="Stok Buku"
            value="{{ old('stock') }}"
        >
        
        @error('stock')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label for="category_id">Kategori Buku</label>
        <select name="category_id" id="category_id">
            <option value="">Pilih Kategori</option>

            {{-- Menampilkan data dari database --}}
            @foreach ($categories as $category)
                <option
                    value="{{ $category->id }}"
                    @selected(old('category_id') == $category->id)
                >
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        @error('category_id')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <br>
    <button type="submit">
        Simpan
    </button>
</form>
@endsection