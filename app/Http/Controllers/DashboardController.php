<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBooks = 8;
        $totalCategories = 5;
        $totalMembers = 5;

        return view('dashboard.index', compact('totalBooks', 'totalCategories', 'totalMembers'));
    }
}