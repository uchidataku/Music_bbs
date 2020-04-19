@extends('layouts.app')

@section('content')
<article class="col-md-8 d-flex flex-column">
    <div class="panel panel-default">
        <div class="panel-heading text-center">{{ $category->name }}</div>
        <div class="panel-body">
            <ul>
                @foreach($category_posts as $category_post)
                    <li class="m-3"><a href="{{ action('PostController@show', $category_post->id) }}">{{ $category_post->title }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</article>
@endsection
