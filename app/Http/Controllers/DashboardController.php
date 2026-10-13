<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Library System';
        $description = 'Sistem Informasi Perpustakaan untuk Mengelola Buku dan Member';
        $totalBooks = 10;
        $totalMembers = 10;
        $totalCategories = 10;

        return view('dashboard.index', compact('title', 'description', 'totalBooks', 'totalMembers', 'totalCategories'));
    }
}