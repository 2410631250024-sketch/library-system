@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>

    @if ($totalBooks > 0)
        <h3>Statistik Sistem:</h3>
        <ul>
            <li>Jumlah Buku: {{ $totalBooks }}</li>
            <li>Jumlah Member: {{ $totalMembers }}</li>
            <li>Jumlah Kategori: {{ $totalCategories }}</li>
        </ul>
    @else
        <p>Sistem belum memiliki data.</p>
    @endif
@endsection