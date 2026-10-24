@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <div>
        <label>Judul Buku</label>
        <input type="text" name="title" placeholder="Judul Buku" value="{{ old('title') }}">

        @error('title')
            <p>style="color: red;">{{ $message }}</p>
        @enderror

    <div>
        <label>Penulis</label>
        <input type="text" name="author" placeholder="Penulis" value="{{ old('author') }}">

        @error('author')
            <p>style="color: red;">{{ $message }}</p>
        @enderror

    <div>
        <label>Tahun Terbit</label>
        <input type="number" name="year" placeholder="Tahun Terbit" value="{{ old('year') }}">

        @error('year')
            <p>style="color: red;">{{ $message }}</p>
        @enderror

    <div>
        <label>Stock Buku</label>
        <input type="number" name="stock" placeholder="Stock Buku" value="{{ old('stock') }}">

        @error('stock')
            <p>style="color: red;">{{ $message }}</p>
        @enderror

    <div>
        <label for="category_id">Kategori</label>
    <select name="category_id" id="category_id">
    <option value="">Pilih kategori</option>
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