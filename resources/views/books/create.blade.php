@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        <label>Judul Buku</label>
        <input 
            type="text" 
            name="title" 
            placeholder="Judul buku"
            value="{{ old('title') }}"
        >
        
        @error('title')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label>Penulis Buku</label>
        <input 
            type="text" 
            name="author" 
            placeholder="Penulis Buku"
            value="{{ old('author') }}"
        >
        
        @error('author')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
        <label>Tahun Terbit</label>
        <input 
            type="number" 
            name="year" 
            placeholder="Tahun Terbit"
            value="{{ old('year') }}"
        >
        
        @error('year')
            <p>{{ $message }}</p>
        @enderror
    </div>

    
    <div>
        <label>Stok Buku</label>
        <input 
            type="number" 
            name="stock" 
            placeholder="Stok Buku"
            value="{{ old('stock') }}"
        >
        
        @error('stock')
            <p>{{ $message }}</p>
        @enderror
    </div>

    <div>
            <label>Kategori Buku</label>
            <select name="category_id">
                <option value="">Pilih Kategori</option>

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
                <p>{{ $message }}</p>
            @enderror
    </div>
    
    <button type="submit">
        Simpan
    </button>
</form>
@endsection