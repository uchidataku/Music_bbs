<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function toppage()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('toppage', compact('posts'));
    }
    
    public function usershow($id)
    {
        $user = User::find($id);
        return view('usershow', compact('user'));
    }
    
    public function userdestroy($id)
    {   
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }
}
