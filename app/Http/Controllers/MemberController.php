<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = ['Andi Wijaya', 'Budi Santoso', 'Siti Rahma', 'Dewi Lestari', 'Eko Prasetyo'];

        return view('members.index', compact('members'));
    }
}