<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileC extends Controller
{
    public function index()
    {
        return view('about');
    }
}
