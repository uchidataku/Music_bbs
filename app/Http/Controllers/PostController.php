<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Http\Requests\CreatePost;

class PostController extends Controller
{
    public function create()
    {   
        $categories = \App\Category::all();
        return view('posts.create')->with('categories',$categories);
    }
    
    public function store(CreatePost $request)
    {
        $user_id = Auth::id();
        $post = new Post();
        $post->user_id = $user_id;
        $post->title = $request->title;
        $post->text = $request->text;
        $post->save();
        $post->categories()->attach(request()->categories);
        return redirect('/');
    }
    
    public function show($id)
    {   
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
}
