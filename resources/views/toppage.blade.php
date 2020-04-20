@extends('layouts.app')

@section('content')
<article class="col-md-8 d-flex flex-column">
    @foreach($posts as $post)
        <div class="row m-3 no-gutters thread-box">
          	<div class="p-3 col-md-8 d-flex flex-column">
      		    <div><h3 class="m-3 p-3 thread-title"><a href="{{ action('PostController@show', $post->id) }}">{{ $post->title }}</a></h3></div>
                <div><h5 class="m-3 p-3 thread-text">{{ $post->text }}</h5></div>
                <div class="d-flex flex-row justify-content-start">
                    @foreach($post->categories as $category)
                        <p class="badge badge-info m-2 p-1 genre">{{ $category->name }}</p>
                    @endforeach
                </div>
                <p class="m-2 p-2">{{ $post->user->name }}</p>
                <p class="m-2 p-2">{{ $post->created_at }}</p>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    @endforeach
</article>
@endsection
