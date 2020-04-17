<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {   
        $categories = \App\Category::all();
        return view('posts.create')->with('categories',$categories);
    }
    
    public function store(Request $request)
    {
        $user_id = Auth::id();
        $post = new \App\Post();
        $post->user_id = $user_id;
        $post->title = $request->title;
        $post->text = $request->text;
        $post->save();
        $post->categories()->attach(request()->categories);
        return redirect('/');
    }
}
