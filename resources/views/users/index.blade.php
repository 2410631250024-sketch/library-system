@extends('layouts.app')

@section('title', 'Kelola Pengguna')

@section('content')
    <h2>Daftar Pengguna (Admin Only)</h2>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><strong>{{ $user->role }}</strong></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection