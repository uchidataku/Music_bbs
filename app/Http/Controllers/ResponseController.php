<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Response;
use App\Post;

class ResponseController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = new Response();
        $user_id = Auth::id();
        $response->post_id = $request->post_id;
        $response->user_id = $user_id;
        $response->text = $request->text;
        $response->save();
        return redirect()->route('posts.show', ['id' => $request->post_id]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $response = Response::find($id);
        $response->delete();
        return redirect('/');
    }
}
