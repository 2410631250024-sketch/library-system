<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function index()
    {
        $members = ['Nataya Diat Fauziah', 'Choi Hyunsuk', 'Park Jeongwoo', 'Soo Junghwan', 'Kim Taejyung'];

        return view('members.index', compact('members'));
    }
}