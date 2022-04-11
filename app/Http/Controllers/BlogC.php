<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BlogC extends Controller
{
    public function index(){
        $blogdata = Blog::all();
        //dd($blogdata);
        return view('blog/index', compact('blogdata'));
    }

    public function create()
    {
        return view('blog/create');
        
    }
    public function store(Request $request)
    {
        Blog::create($request-> all());
        return redirect('index');
        
        //dd($request->all());
    }
}
