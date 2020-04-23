<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\Response;
use App\Category;
use App\Http\Requests\CreatePost;

class PostController extends Controller
{
    public function category_index()
    {   
        $categories = Category::all();
        return view('posts.category_index', compact('categories'));
    }
    
    public function category($id)
    {   
        $category = Category::find($id);
        $category_posts = $category->posts;
        return view('posts.category', compact('category', 'category_posts'));
    }
    
    public function index(Request $request)
    {   
        $keyword = $request->input('keyword');
        $query = Post::query();
        
        if (!empty($keyword)) {
            $query->where('title', 'LIKE', "%{$keyword}%")
                ->orWhere('text', 'LIKE', "%{$keyword}%")
                ->get();
        }
        
        $data = $query->paginate(10);
        
        return view('posts.index', compact('keyword', 'data'));
    }
    
    public function create()
    {   
        $categories = Category::all();
        return view('posts.create')->with('categories',$categories);
    }
    
    public function store(Request $request)
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
        $responses = Response::where('post_id', $post->id)->get();
        return view('posts.show', compact('post', 'responses'));
    }
    
    public function edit($id)
    {   
        $post = Post::find($id);
        $categories = \App\Category::all();
        return view('posts.edit', compact('post', 'categories'));
    }
    
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->text = $request->text;
        $post->save();
        $post->categories()->attach(request()->categories);
        return redirect('/');
    }
    
    public function destroy($id)
    {   
        $post = Post::find($id);
        $post->delete();
        return redirect('/');
    }
}
