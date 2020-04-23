@extends('layouts.app')

@section('content')
<article class="col-md-8 d-flex flex-column">
    <div class="panel panel-default">
        <div class="panel-heading text-center">ジャンル一覧</div>
        <div class="panel-body">
            <ul>
                @foreach($categories as $category)
                    <li class="m-3"><a href="{{ action('PostController@category', $category->id) }}">{{ $category->name }} ({{ $category->posts->count()}})</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</article>
@endsection
