@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
<form action="{{ route('books.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Judul Buku">
    <input type="text" name="author" placeholder="Penulis">
    <input type="number" name="year" placeholder="Tahun Terbit">
    <input type="number" name="stock" placeholder="Stok Buku">

    <button type="submit">
        Simpan
    </button>
</form>
@endsection