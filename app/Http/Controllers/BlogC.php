<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class BlogC extends Controller
{
    public function index()
    {
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
        $this->validate($request,[
            'author' => 'required',
            'title' => 'required',
            'body' => 'required',
            'keyword' => 'required',
        ]);

        Blog::create($request->all());
        return redirect(url('data-blog'));

        //dd($request->all());
    }

    public function destroy(Blog $id)
    {
        $id->delete();
        return redirect(url('data-blog'));
    }

    public function edit(Blog $id){
        $blg = Blog::findorfail($id);
        return view('blog/edit', compact('blg'));
        return redirect(url('data-blog'));
    }
}
