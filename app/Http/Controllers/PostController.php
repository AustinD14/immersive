<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('home', compact('posts')); 
    }

    public function create(){
        return veiew('post-create');
    }

    public function store(Request $request){
        return $request;
    }
}
